<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_dashboard.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/d_sidenavbar.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/_base.css">
  <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/handlebars/4.7.7/handlebars.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script>
      'use strict';

      /** Hide a DOM element. */
      function hideElement(el) {
        el.style.display = 'none';
      }

      /** Show a DOM element that has been hidden. */
      function showElement(el) {
        el.style.display = 'block';
      }

      /** Helper function to generate a Google Maps directions URL */
      function generateDirectionsURL(origin, destination) {
        const googleMapsUrlBase = 'https://www.google.com/maps/dir/?';
        const searchParams = new URLSearchParams('api=1');
        searchParams.append('origin', origin);
        const destinationParam = [];
        // Add title to destinationParam except in cases where Quick Builder set
        // the title to the first line of the address
        if (destination.title !== destination.address1) {
          destinationParam.push(destination.title);
        }
        destinationParam.push(destination.address1, destination.address2);
        searchParams.append('destination', destinationParam.join(','));
        return googleMapsUrlBase + searchParams.toString();
      }

      /**
       * Defines an instance of the Locator+ solution, to be instantiated
       * when the Maps library is loaded.
       */
      function LocatorPlus(configuration) {
        const locator = this;

        locator.locations = configuration.locations || [];
        locator.capabilities = configuration.capabilities || {};

        const mapEl = document.getElementById('gmp-map');
        const panelEl = document.getElementById('locations-panel');
        locator.panelListEl = document.getElementById('locations-panel-list');
        const sectionNameEl =
            document.getElementById('location-results-section-name');
        const resultsContainerEl = document.getElementById('location-results-list');

        const itemsTemplate = Handlebars.compile(
            document.getElementById('locator-result-items-tmpl').innerHTML);

        locator.searchLocation = null;
        locator.searchLocationMarker = null;
        locator.selectedLocationIdx = null;
        locator.userCountry = null;

        // Initialize the map -------------------------------------------------------
        locator.map = new google.maps.Map(mapEl, configuration.mapOptions);

        // Store selection.
        const selectResultItem = function(locationIdx, panToMarker, scrollToResult) {
          locator.selectedLocationIdx = locationIdx;
          for (let locationElem of resultsContainerEl.children) {
            locationElem.classList.remove('selected');
            if (getResultIndex(locationElem) === locator.selectedLocationIdx) {
              locationElem.classList.add('selected');
              if (scrollToResult) {
                panelEl.scrollTop = locationElem.offsetTop;
              }
            }
          }
          if (panToMarker && (locationIdx != null)) {
            locator.map.panTo(locator.locations[locationIdx].coords);
          }
        };

        // Create a marker for each location.
        const markers = locator.locations.map(function(location, index) {
          const marker = new google.maps.Marker({
            position: location.coords,
            map: locator.map,
            title: location.title,
          });
          marker.addListener('click', function() {
            selectResultItem(index, false, true);
          });
          return marker;
        });

        // Fit map to marker bounds.
        locator.updateBounds = function() {
          const bounds = new google.maps.LatLngBounds();
          if (locator.searchLocationMarker) {
            bounds.extend(locator.searchLocationMarker.getPosition());
          }
          for (let i = 0; i < markers.length; i++) {
            bounds.extend(markers[i].getPosition());
          }
          locator.map.fitBounds(bounds);
        };
        if (locator.locations.length) {
          locator.updateBounds();
        }

        // Get the distance of a store location to the user's location,
        // used in sorting the list.
        const getLocationDistance = function(location) {
          if (!locator.searchLocation) return null;

          // Use travel distance if available (from Distance Matrix).
          if (location.travelDistanceValue != null) {
            return location.travelDistanceValue;
          }

          // Fall back to straight-line distance.
          return google.maps.geometry.spherical.computeDistanceBetween(
              new google.maps.LatLng(location.coords),
              locator.searchLocation.location);
        };

        // Render the results list --------------------------------------------------

        // When the results list re-renders, always update directions on the
        // first selection event.
        let updateDirectionsOnSelect;

        const getResultIndex = function(elem) {
          return parseInt(elem.getAttribute('data-location-index'));
        };

        locator.renderResultsList = function() {
          let locations = locator.locations.slice();
          for (let i = 0; i < locations.length; i++) {
            locations[i].index = i;
          }
          if (locator.searchLocation) {
            sectionNameEl.textContent =
                'Nearest locations (' + locations.length + ')';
            locations.sort(function(a, b) {
              return getLocationDistance(a) - getLocationDistance(b);
            });
          } else {
            sectionNameEl.textContent = `All locations (${locations.length})`;
          }
          const resultItemContext = {locations: locations};
          resultsContainerEl.innerHTML = itemsTemplate(resultItemContext);
          updateDirectionsOnSelect = true;
          for (let item of resultsContainerEl.children) {
            const resultIndex = getResultIndex(item);
            if (resultIndex === locator.selectedLocationIdx) {
              item.classList.add('selected');
            }

            const resultSelectionHandler = function() {
              if (resultIndex !== locator.selectedLocationIdx ||
                    updateDirectionsOnSelect) {
                selectResultItem(resultIndex, true, false);
                locator.updateDirections();
                updateDirectionsOnSelect = false;
              }
            };

            // Clicking anywhere on the item selects this location.
            // Additionally, create a button element to make this behavior
            // accessible under tab navigation.
            item.addEventListener('click', resultSelectionHandler);
            item.querySelector('.select-location')
                .addEventListener('click', function(e) {
                  resultSelectionHandler();
                  e.stopPropagation();
                });

            item.querySelector('.details-button')
                .addEventListener('click', function() {
                  locator.showDetails(resultIndex);
                });

            // Clicking the directions button will open Google Maps directions in a
            // new tab
            const origin = (locator.searchLocation != null) ?
                locator.searchLocation.location :
                '';
            const destination = locator.locations[resultIndex];
            const googleMapsUrl = generateDirectionsURL(origin, destination);
            item.querySelector('.directions-button')
                .setAttribute('href', googleMapsUrl);
          }
        };

        // Optional capability initialization --------------------------------------
        initializeSearchInput(locator);
        initializeDistanceMatrix(locator);
        initializeDirections(locator);
        initializeDetails(locator);

        // Initial render of results -----------------------------------------------
        locator.renderResultsList();
      }

      /** When the search input capability is enabled, initialize it. */
      function initializeSearchInput(locator) {
        const geocodeCache = new Map();
        const geocoder = new google.maps.Geocoder();

        const searchInputEl = document.getElementById('location-search-input');
        const searchButtonEl = document.getElementById('location-search-button');

        const updateSearchLocation = function(address, location) {
          if (locator.searchLocationMarker) {
            locator.searchLocationMarker.setMap(null);
          }
          if (!location) {
            locator.searchLocation = null;
            return;
          }
          locator.searchLocation = {'address': address, 'location': location};
          locator.searchLocationMarker = new google.maps.Marker({
            position: location,
            map: locator.map,
            title: 'My location',
            icon: {
              path: google.maps.SymbolPath.CIRCLE,
              scale: 12,
              fillColor: '#3367D6',
              fillOpacity: 0.5,
              strokeOpacity: 0,
            }
          });

          // Update the locator's idea of the user's country, used for units. Use
          // `formatted_address` instead of the more structured `address_components`
          // to avoid an additional billed call.
          const addressParts = address.split(' ');
          locator.userCountry = addressParts[addressParts.length - 1];

          // Update map bounds to include the new location marker.
          locator.updateBounds();

          // Update the result list so we can sort it by proximity.
          locator.renderResultsList();

          locator.updateTravelTimes();

          locator.clearDirections();
        };

        const geocodeSearch = function(query) {
          if (!query) {
            return;
          }

          const handleResult = function(geocodeResult) {
            searchInputEl.value = geocodeResult.formatted_address;
            updateSearchLocation(
                geocodeResult.formatted_address, geocodeResult.geometry.location);
          };

          if (geocodeCache.has(query)) {
            handleResult(geocodeCache.get(query));
            return;
          }
          const request = {address: query, bounds: locator.map.getBounds()};
          geocoder.geocode(request, function(results, status) {
            if (status === 'OK') {
              if (results.length > 0) {
                const result = results[0];
                geocodeCache.set(query, result);
                handleResult(result);
              }
            }
          });
        };

        // Set up geocoding on the search input.
        searchButtonEl.addEventListener('click', function() {
          geocodeSearch(searchInputEl.value.trim());
        });

        // Initialize Autocomplete.
        initializeSearchInputAutocomplete(
            locator, searchInputEl, geocodeSearch, updateSearchLocation);
      }

      /** Add Autocomplete to the search input. */
      function initializeSearchInputAutocomplete(
          locator, searchInputEl, fallbackSearch, searchLocationUpdater) {
        // Set up Autocomplete on the search input. Bias results to map viewport.
        const autocomplete = new google.maps.places.Autocomplete(searchInputEl, {
          types: ['geocode'],
          fields: ['place_id', 'formatted_address', 'geometry.location']
        });
        autocomplete.bindTo('bounds', locator.map);
        autocomplete.addListener('place_changed', function() {
          const placeResult = autocomplete.getPlace();
          if (!placeResult.geometry) {
            // Hitting 'Enter' without selecting a suggestion will result in a
            // placeResult with only the text input value as the 'name' field.
            fallbackSearch(placeResult.name);
            return;
          }
          searchLocationUpdater(
              placeResult.formatted_address, placeResult.geometry.location);
        });
      }

      /** Initialize Distance Matrix for the locator. */
      function initializeDistanceMatrix(locator) {
        const distanceMatrixService = new google.maps.DistanceMatrixService();

        // Annotate travel times to the selected location using Distance Matrix.
        locator.updateTravelTimes = function() {
          if (!locator.searchLocation) return;

          const units = (locator.userCountry === 'USA') ?
              google.maps.UnitSystem.IMPERIAL :
              google.maps.UnitSystem.METRIC;
          const request = {
            origins: [locator.searchLocation.location],
            destinations: locator.locations.map(function(x) {
              return x.coords;
            }),
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: units,
          };
          const callback = function(response, status) {
            if (status === 'OK') {
              const distances = response.rows[0].elements;
              for (let i = 0; i < distances.length; i++) {
                const distResult = distances[i];
                let travelDistanceText, travelDistanceValue;
                if (distResult.status === 'OK') {
                  travelDistanceText = distResult.distance.text;
                  travelDistanceValue = distResult.distance.value;
                }
                const location = locator.locations[i];
                location.travelDistanceText = travelDistanceText;
                location.travelDistanceValue = travelDistanceValue;
              }

              // Re-render the results list, in case the ordering has changed.
              locator.renderResultsList();
            }
          };
          distanceMatrixService.getDistanceMatrix(request, callback);
        };
      }

      /** Initialize Directions service for the locator. */
      function initializeDirections(locator) {
        const directionsCache = new Map();
        const directionsService = new google.maps.DirectionsService();
        const directionsRenderer = new google.maps.DirectionsRenderer({
          suppressMarkers: true,
        });

        // Update directions displayed from the search location to
        // the selected location on the map.
        locator.updateDirections = function() {
          if (!locator.searchLocation || (locator.selectedLocationIdx == null)) {
            return;
          }
          const cacheKey = JSON.stringify(
              [locator.searchLocation.location, locator.selectedLocationIdx]);
          if (directionsCache.has(cacheKey)) {
            const directions = directionsCache.get(cacheKey);
            directionsRenderer.setMap(locator.map);
            directionsRenderer.setDirections(directions);
            return;
          }
          const request = {
            origin: locator.searchLocation.location,
            destination: locator.locations[locator.selectedLocationIdx].coords,
            travelMode: google.maps.TravelMode.DRIVING
          };
          directionsService.route(request, function(response, status) {
            if (status === 'OK') {
              directionsRenderer.setMap(locator.map);
              directionsRenderer.setDirections(response);
              directionsCache.set(cacheKey, response);
            }
          });
        };

        locator.clearDirections = function() {
          directionsRenderer.setMap(null);
        };
      }

      /** Initialize Place Details service and UI for the locator. */
      function initializeDetails(locator) {
        const panelDetailsEl = document.getElementById('locations-panel-details');
        const detailsService = new google.maps.places.PlacesService(locator.map);

        const detailsTemplate = Handlebars.compile(
            document.getElementById('locator-details-tmpl').innerHTML);

        const renderDetails = function(context) {
          panelDetailsEl.innerHTML = detailsTemplate(context);
          panelDetailsEl.querySelector('.back-button')
              .addEventListener('click', hideDetails);
        };

        const hideDetails = function() {
          showElement(locator.panelListEl);
          hideElement(panelDetailsEl);
        };

        locator.showDetails = function(locationIndex) {
          const location = locator.locations[locationIndex];
          const context = {location};

          // Helper function to create a fixed-size array.
          const initArray = function(arraySize) {
            const array = [];
            while (array.length < arraySize) {
              array.push(0);
            }
            return array;
          };

          if (location.placeId) {
            const request = {
              placeId: location.placeId,
              fields: [
                'formatted_phone_number', 'website', 'opening_hours', 'url',
                'utc_offset_minutes', 'price_level', 'rating', 'user_ratings_total'
              ]
            };
            detailsService.getDetails(request, function(place, status) {
              if (status == google.maps.places.PlacesServiceStatus.OK) {
                if (place.opening_hours) {
                  const daysHours =
                      place.opening_hours.weekday_text.map(e => e.split(/\:\s+/))
                          .map(e => ({'days': e[0].substr(0, 3), 'hours': e[1]}));

                  for (let i = 1; i < daysHours.length; i++) {
                    if (daysHours[i - 1].hours === daysHours[i].hours) {
                      if (daysHours[i - 1].days.indexOf('-') !== -1) {
                        daysHours[i - 1].days =
                            daysHours[i - 1].days.replace(/\w+$/, daysHours[i].days);
                      } else {
                        daysHours[i - 1].days += ' - ' + daysHours[i].days;
                      }
                      daysHours.splice(i--, 1);
                    }
                  }
                  place.openingHoursSummary = daysHours;
                }
                if (place.rating) {
                  const starsOutOfTen = Math.round(2 * place.rating);
                  const fullStars = Math.floor(starsOutOfTen / 2);
                  const halfStars = fullStars !== starsOutOfTen / 2 ? 1 : 0;
                  const emptyStars = 5 - fullStars - halfStars;

                  // Express stars as arrays to make iterating in Handlebars easy.
                  place.fullStarIcons = initArray(fullStars);
                  place.halfStarIcons = initArray(halfStars);
                  place.emptyStarIcons = initArray(emptyStars);
                }
                if (place.price_level) {
                  place.dollarSigns = initArray(place.price_level);
                }
                if (place.website) {
                  const url = new URL(place.website);
                  place.websiteDomain = url.hostname;
                }

                context.place = place;
                renderDetails(context);
              }
            });
          }
          renderDetails(context);
          hideElement(locator.panelListEl);
          showElement(panelDetailsEl);
        };
      }
    </script>
    <script>
      const CONFIGURATION = {
        "locations": [
        ],
        "mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17,"mapId":""},
        "mapsApiKey": "YOUR_API_KEY_HERE",
        "capabilities": {"input":true,"autocomplete":true,"directions":true,"distanceMatrix":true,"details":true,"actions":false}
      };

      function initMap() {
        new LocatorPlus(CONFIGURATION);
      }
    </script>
    <script id="locator-result-items-tmpl" type="text/x-handlebars-template">
      {{#each locations}}
        <li class="location-result" data-location-index="{{index}}">
          <button class="select-location">
            <h2 class="name">{{title}}</h2>
          </button>
          <div class="address">{{address1}}<br>{{address2}}</div>
          <div class="options">
            <div class="option-container">
              <button class="details-button option">
                <span>View details</span>
              </button>
            </div>
          </div>
          {{#if travelDistanceText}}
            <div class="distance">{{travelDistanceText}}</div>
          {{/if}}
          <a class="directions-button" href="" target="_blank" title="Get directions to this location on Google Maps">
            <svg width="34" height="34" viewBox="0 0 34 34"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17.5867 9.24375L17.9403 8.8902V8.8902L17.5867 9.24375ZM16.4117 9.24375L16.7653 9.59731L16.7675 9.59502L16.4117 9.24375ZM8.91172 16.7437L8.55817 16.3902L8.91172 16.7437ZM8.91172 17.9229L8.55817 18.2765L8.55826 18.2766L8.91172 17.9229ZM16.4117 25.4187H16.9117V25.2116L16.7652 25.0651L16.4117 25.4187ZM16.4117 25.4229H15.9117V25.63L16.0582 25.7765L16.4117 25.4229ZM25.0909 17.9229L25.4444 18.2765L25.4467 18.2742L25.0909 17.9229ZM25.4403 16.3902L17.9403 8.8902L17.2332 9.5973L24.7332 17.0973L25.4403 16.3902ZM17.9403 8.8902C17.4213 8.3712 16.5737 8.3679 16.0559 8.89248L16.7675 9.59502C16.8914 9.4696 17.1022 9.4663 17.2332 9.5973L17.9403 8.8902ZM16.0582 8.8902L8.55817 16.3902L9.26527 17.0973L16.7653 9.5973L16.0582 8.8902ZM8.55817 16.3902C8.0379 16.9105 8.0379 17.7562 8.55817 18.2765L9.26527 17.5694C9.13553 17.4396 9.13553 17.227 9.26527 17.0973L8.55817 16.3902ZM8.55826 18.2766L16.0583 25.7724L16.7652 25.0651L9.26517 17.5693L8.55826 18.2766ZM15.9117 25.4187V25.4229H16.9117V25.4187H15.9117ZM16.0582 25.7765C16.5784 26.2967 17.4242 26.2967 17.9444 25.7765L17.2373 25.0694C17.1076 25.1991 16.895 25.1991 16.7653 25.0694L16.0582 25.7765ZM17.9444 25.7765L25.4444 18.2765L24.7373 17.5694L17.2373 25.0694L17.9444 25.7765ZM25.4467 18.2742C25.9631 17.7512 25.9663 16.9096 25.438 16.3879L24.7354 17.0995C24.8655 17.2279 24.8687 17.4363 24.7351 17.5716L25.4467 18.2742Z" fill="#1967d2"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 19.8333V17.75H15.6667V20.25H14V16.9167C14 16.4542 14.3708 16.0833 14.8333 16.0833H19V14L21.9167 16.9167L19 19.8333Z" fill="#1967d2"/>
              <circle class="directions-button-background" cx="17" cy="17" r="16.5" stroke="#1967d2"/>
            </svg>
          </a>
        </li>
      {{/each}}
    </script>
    <script id="locator-details-tmpl" type="text/x-handlebars-template">
      <button class="back-button">
        <img class="icon" src="https://fonts.gstatic.com/s/i/googlematerialicons/arrow_back/v11/24px.svg" alt=""/>
        Back
      </button>
      <header>
        <div class="banner">
          <svg width="23" height="32" viewBox="0 0 23 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.9976 11.5003C22.9976 13.2137 22.7083 14.9123 21.8025 16.7056C18.6321 22.9832 12.7449 24.3314 12.2758 30.7085C12.2448 31.1294 11.9286 31.4744 11.4973 31.4744C11.0689 31.4744 10.7527 31.1294 10.7218 30.7085C10.2527 24.3314 4.3655 22.9832 1.19504 16.7056C0.289306 14.9123 0 13.2137 0 11.5003C0 5.13275 5.14557 0 11.5003 0C17.852 0 22.9976 5.13275 22.9976 11.5003Z" fill="#4285F4"/>
            <path fill-rule="evenodd" clip-rule="evenodd" transform="translate(5.5,5.5)" d="M6 8.84091L9.708 11L8.724 6.92961L12 4.19158L7.6856 3.83881L6 0L4.3144 3.83881L0 4.19158L3.276 6.92961L2.292 11L6 8.84091Z" fill="#FBE15C"/>
          </svg>
        </div>
        <h2>{{location.title}}</h2>
      </header>
      {{#if location.travelDistanceText}}
        <div class="distance">{{location.travelDistanceText}} away</div>
      {{/if}}
      <div class="address">
        {{location.address1}}<br>
        {{location.address2}}
      </div>
      <div class="atmosphere">
        {{#if place.rating}}
          <span class="star-rating-numeric">{{place.rating}}</span>
          <span>
            {{#each place.fullStarIcons}}
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/star/v15/24px.svg"
                   alt="" class="star-icon"/>
            {{/each}}
            {{#each place.halfStarIcons}}
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/star_half/v17/24px.svg"
                   alt="" class="star-icon"/>
            {{/each}}
            {{#each place.emptyStarIcons}}
              <img src="https://fonts.gstatic.com/s/i/googlematerialicons/star_outline/v9/24px.svg"
                   alt="" class="star-icon"/>
            {{/each}}
          </span>
        {{/if}}
        {{#if place.user_ratings_total}}
          <a href="{{place.url}}" target="_blank">{{place.user_ratings_total}} reviews</a>
        {{else}}
          <a href="{{place.url}}" target="_blank">See on Google Maps</a>
        {{/if}}
        {{#if place.price_level}}
          &bull;
          <span class="price-dollars">
            {{#each place.dollarSigns}}${{/each}}
          </span>
        {{/if}}
      </div>
      <hr/>
      {{#if place.opening_hours}}
        <div class="hours contact">
          <img src="https://fonts.gstatic.com/s/i/googlematerialicons/schedule/v12/24px.svg"
               alt="Opening hours" class="icon"/>
          <div class="right">
            {{#each place.openingHoursSummary}}
              <div>
                <span class="weekday">{{days}}</span>
                <span class="hours">{{hours}}</span>
              </div>
            {{/each}}
          </div>
        </div>
      {{/if}}
      {{#if place.website}}
        <div class="website contact">
          <img src="https://fonts.gstatic.com/s/i/googlematerialicons/public/v10/24px.svg"
               alt="Website" class="icon"/>
          <div class="right">
            <a href="{{place.website}}" target="_blank">{{place.websiteDomain}}</a>
          </div>
        </div>
      {{/if}}
      {{#if place.formatted_phone_number}}
        <div class="phone contact">
          <img src="https://fonts.gstatic.com/s/i/googlematerialicons/phone/v10/24px.svg"
               alt="Phone number" class="icon"/>
          <div class="right">
            {{place.formatted_phone_number}}
          </div>
        </div>
      {{/if}}
      {{#if place.html_attributions}}
        {{#each place.html_attributions}}
          <p class="attribution">{{{this}}}</p>
        {{/each}}
      {{/if}}
    </script>
  </head>

<?php require APPROOT . '/views/users/driver/vehicle-own-office-transport/d_dashboard-own-office.php'; ?>

<?php 
  //require APPROOT . '/views/inc/map.php'; 
?>

<main class="full-page">
<div class="top-row col-12">
  <div class="btn-1-container col-3">
    <div class="btn-1 col-10">
      <a href="<?php echo URLROOT;?>/D_Vehicles/studentsToBeAbsent"><h1>Students To Be Absent</h1></a>
    </div>
  </div>

  <div class="btn-1-container col-3">
    <div class="btn-1 col-10">
      <a href="#"><h1>Reservation Requests</h1></a>
    </div>
  </div>

  <div class="btn-1-container col-3">
    <div class="btn-1 col-10">
      <a href="#"><h1>Earnings Statistics</h1></a>
    </div>
  </div>
</div>

<!-- <div class="map-div col-12">
  <div class="map-container col-10">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9029322876!2d79.85896421523185!3d6.9022108205585555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity%20of%20Colombo%20School%20of%20Computing%20(UCSC)!5e0!3m2!1sen!2slk!4v1675998107896!5m2!1sen!2slk" width="1400" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div> -->
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>


</body>
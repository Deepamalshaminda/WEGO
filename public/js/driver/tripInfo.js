let ongoing_trips = null;
let completed_trips = null;

const fetchOngoingTrips = async() => {
    const response = await fetch('http://localhost/projectwego/D_ManageDrivers/getOngoingTripInfo');
    if(response.status == 200){
        ongoing_trips = await response.json();
        loadOngoingTrips(ongoing_trips);
    }
}

const fetchCompletedTrips = async() => {
    const response = await fetch('http://localhost/projectwego/D_ManageDrivers/getCompletedTripsInfo');
    if(response.status == 200){
        completed_trips = await response.json();
        loadCompletedTrips(completed_trips);
    }
}

const loadOngoingTrips = (trips) => {
    let result = "";

    if(trips != null){
        trips.forEach(trip => {
            
            let card = 
            
            `<div class="card-row-left col-6">
            <div class="card-row-left-container col-10">
              <div class="trip-id col-12">
                <h2>Trip ID - ${trip.trip_id} </h2>
              </div>

              <div class="details col-12">
                <div class="details-container col-12">
                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Start</h4>
                    </div>
                    <div class="long col-8">
                      <p>${trip.start}</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Final Destination</h4>
                    </div>
                    <div class="long col-8">
                      <p>${trip.destination}</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Driver ID</h4>
                    </div>
                    <div class="long col-3">
                      <p>${trip.driver_id}</p>
                    </div>
                    <div class="rest col-3">
                      <button class="button"><a class="link" href="#">Driver Details</a></button>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Number of Passengers</h4>
                    </div>
                    <div class="long col-8">
                      <p>${trip.no_of_passengers}</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Complaints</h4>
                    </div>
                    <div class="long col-8">
                      <button class="button"><a class="link" href="#">Click Here</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            `;
            result += card;
        });
        ongoingTrips.innerHTML = result;
    }
    else{
        result = "No Ongoing Trips";
    }
}

const loadCompletedTrips = (trips) => {

    let result = "";

    if(trips != null){
        trips.forEach(trip => {
            
            let card = 
            
            `<div class="card-row-left col-6">
            <div class="card-row-left-container col-10">
              <div class="trip-id col-12">
                <h2>Trip ID - ${trip.trip_id} </h2>
              </div>

              <div class="details col-12">
                <div class="details-container col-12">
                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Start</h4>
                    </div>
                    <div class="long col-8">
                      <p>${trip.start}</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Final Destination</h4>
                    </div>
                    <div class="long col-8">
                      <p>${trip.destination}</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Driver ID</h4>
                    </div>
                    <div class="long col-3">
                      <p>${trip.driver_id}</p>
                    </div>
                    <div class="rest col-3">
                      <button class="button"><a class="link" href="#">Driver Details</a></button>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Number of Passengers</h4>
                    </div>
                    <div class="long col-8">
                      <p>${trip.no_of_passengers}</p>
                    </div>
                  </div>

                  <div class="details-container-top col-12">
                    <div class="short col-4">
                      <h4>Complaints</h4>
                    </div>
                    <div class="long col-8">
                      <button class="button"><a class="link" href="#">Click Here</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            `;
            result += card;
        });
        completedTrips.innerHTML = result;
    }
    else{
        result = "No Completed Trips";
    }
}

document.addEventListener("DOMContentLoaded", () => fetchOngoingTrips());

const ongoingTrips = document.querySelector("#trip-info");
const completedTrips = document.querySelector("#trip-info");

const btnOngoingTrips = document.querySelector("#ongoing-trips");
const btnCompletedTrips = document.querySelector("#completed-trips");

btnCompletedTrips.addEventListener("click", () => {
    fetchCompletedTrips();
    btnOngoingTrips.classList.remove('active-link');
    btnCompletedTrips.classList.add('active-link');
    btnCompletedTrips.classList.remove('inactive-link');
    btnOngoingTrips.classList.add('inactive-link');
});

btnOngoingTrips.addEventListener("click", () => {
    loadOngoingTrips(ongoing_trips);
    btnCompletedTrips.classList.remove('active-link');
    btnOngoingTrips.classList.add('active-link');
    btnOngoingTrips.classList.remove('inactive-link');
    btnCompletedTrips.classList.add('inactive-link');
});

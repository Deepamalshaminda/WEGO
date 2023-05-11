// document.querySelectorAll('.clickable-div').forEach(function(div) {
//     div.addEventListener('click', function() {
//       var path = this.getAttribute('value');
//       if (path === 'school-service') {
//         console.log('school-service');
//         window.location.href = "http://localhost/projectwego/users/schoolService";
//       } else if (path === 'office-service') {
//         console.log('office-service');
//         window.location.href = "http://localhost/projectwego/Users/officeService";
//       }
//     });
//   });

////////////////////////////////////////////////////////////////////////////////////////

let user = null;

const fetchUserId = async() => {
  const response = await fetch('http://localhost/projectwego/Users/getUserIdJson');
  if(response.status === 200){
    user = await response.json();
    renderView(user);
  }
}

const renderView = (user) => {

  console.log(user.user_id);

  let result = `
    <div class="right-container col-6">
   
        <button id="school-service" class="col-4 right clickable-div" value="school-service" onclick="setVehicle(${user.user_id})">
            <h3 class="content">
                Register as a school service supplier 
            </h3>
        </button>
   
    </div>
    <div class="left-container col-6">
          <div id="office-service" class="col-4 left clickable-div" value="office-service" onclick="setVehicle(${user.user_id})">
              <h3 class="content">
                  Register as a office transport supplier
              </h3>
          </div>
    </div>
  `;

  view.innerHTML = result;

}

function setVehicle($us_id) {
  var path = document.querySelector('.clickable-div').value;
  console.log($us_id);
  if (path === 'school-service') {
    console.log('school-service');
    window.location.href = "http://localhost/projectwego/Users/schoolService/" + $us_id;
    if(response.status == 200){
      console.log("Successful");
    }
  } else if (path === 'office-service') {
    console.log('office-service');
    window.location.href = "http://localhost/projectwego/Users/officeService/" + $us_id;
    if(response.status == 200){
      console.log("Successful");
    }
  }
}

const view = document.querySelector('#view');
document.addEventListener("DOMContentLoaded", () => fetchUserId());
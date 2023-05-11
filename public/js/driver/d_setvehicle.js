// document.querySelectorAll('.clickable-div').forEach(function(div) {
//   div.addEventListener('click', function() {
//     var path = this.getAttribute('value');
//     if (path === 'own-vehicle') {
//       console.log('own-vehicle');
//       window.location.href = "http://localhost/projectwego/Users/ownVehicle";
//     } else if (path === 'find-vehicle') {
//       console.log('find-vehicle');
//       window.location.href = "http://localhost/projectwego/Users/findVehicle";
//     }
//   });
// });

// function setVehicle($us_id) {
//   var path = document.querySelector('#own-vehicle').value;
//   console.log(path);
//   if (path === 'own-vehicle') {
//     console.log('own-vehicle');
//     const response = fetch("http://localhost/projectwego/Users/ownVehicle/" + urlencode(json_encode($us_id)));
//     if(response.status == 200){
//       console.log("Successful");
//     }
//   } else if (path === 'find-vehicle') {
//     console.log('find-vehicle');
//     const response = fetch("http://localhost/projectwego/Users/findVehicle/" + urlencode(json_encode($us_id)));
//     if(response.status == 200){
//       console.log("Successful");
//     }
//   }
// }

// async function setVehicle($us_id) {
//   var path = document.querySelector('#own-vehicle').value;
//   console.log(path);
//   if (path === 'own-vehicle') {
//     console.log('own-vehicle');
//     const response = await fetch("http://localhost/projectwego/Users/ownVehicle/" + $us_id);
//     if(response.status == 200){
//       console.log("Successful");
//     }
//   } else if (path === 'find-vehicle') {
//     console.log('find-vehicle');
//     const response = await fetch("http://localhost/projectwego/Users/findVehicle/" + $us_id);
//     if(response.status == 200){
//       console.log("Successful");
//     }
//   }
// }

// document.addEventListener('DOMContentLoaded', function() {
//   function setVehicle($us_id) {
//     var path = document.querySelector('#own-vehicle').value;
//     console.log(path);
//     if (path === 'own-vehicle') {
//       console.log('own-vehicle');
//       fetch("http://localhost/projectwego/Users/ownVehicle/" + $us_id)
//         .then(response => {
//           if (response.status == 200) {
//             console.log("Successful");
//           }
//         })
//         .catch(error => {
//           console.error("Error:", error);
//         });
//     } else if (path === 'find-vehicle') {
//       console.log('find-vehicle');
//       fetch("http://localhost/projectwego/Users/findVehicle/" + $us_id)
//         .then(response => {
//           if (response.status == 200) {
//             console.log("Successful");
//           }
//         })
//         .catch(error => {
//           console.error("Error:", error);
//         });
//     }
//   }

//   // Call the setVehicle function with a sample $us_id value
//   setVehicle($us_id); // Replace with an appropriate $us_id value
// });



// const sendResponse = async (inquiryId) => {
//   const responseBox = document.querySelector(`#inquiry-${inquiryId}-card`).querySelector("textarea");
//   const responseText = responseBox.value;
//   let formData = new FormData;
//   formData.append("responseMessage", responseText)
//   const res = await fetch('http://localhost/krushi-arunalu/inquiries/addResponseToDb/' + inquiryId, {
//       method: "POST",
//       body: formData
//   });
//   if (res.status === 200) {
//      responseBox.value = "";
//   }
// }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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
   
      <button id="own-vehicle" class="col-4 left clickable-div" value="own-vehicle" onclick="console.log('Button clicked!'); setVehicleAsOwn(${user.user_id})">
        <h3 class="content">
          Own vehicle suppliers
        </h3>
      </button>
   
    </div>
    <div class="left-container col-6">
      <button id="find-vehicle" class="col-4 left clickable-div" value="find-vehicle" onclick="console.log('Button clicked!'); setVehicleAsFind(${user.user_id})">
        <h3 class="content">
          Find vehicle suppliers
        </h3>
      </button>
    </div>  
  `;

  view.innerHTML = result;

}

const setVehicleAsOwn = async($us_id) => {
  console.log($us_id);
  const response = await fetch('http://localhost/projectwego/Users/ownVehicle?userId=' + $us_id);
    console.log($us_id)
    if(response.status == 200){
      console.log("Successful");
}
}

const setVehicleAsFind = async($us_id) => {
  console.log($us_id);
  const response = await fetch('http://localhost/projectwego/Users/ownVehicle?userId=' + $us_id);
    console.log($us_id)
    if(response.status == 200){
      console.log("Successful");
}
}

// function setVehicleAsFind($us_id) {
//   console.log($us_id);
//   window.location.href = "http://localhost/projectwego/Users/findVehicle?userId=" + $us_id;
//     if(response.status == 200){
//       console.log("Successful");
// }
// }

// function setVehicle($us_id) {
//   var path = document.querySelector('.clickable-div').value;
//   console.log($us_id);
//   if (path === 'own-vehicle') {
//     console.log('own-vehicle');
//     window.location.href = "http://localhost/projectwego/Users/ownVehicle/" + $us_id;
//     if(response.status == 200){
//       console.log("Successful");
//     }
//   } else if (path === 'find-vehicle') {
//     console.log('find-vehicle');
//     window.location.href = "http://localhost/projectwego/Users/findVehicle/" +$us_id;
//     if(response.status == 200){
//       console.log("Successful");
//     }
//   }
// }


// function setVehicleAsOwn(userId) {
//   console.log(userId);

//   fetch(`http://localhost/projectwego/Users/ownVehicle/${userId}`, {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json'
//     },
//     body: JSON.stringify({ userId: userId })
//   })
//   .then(response => {
//     if (response.status === 200) {
//       console.log('Successful');
//       // do something on success
//     }
//   })
//   .catch(error => {
//     console.error('Error:', error);
//   });
// }

// function setVehicleAsFind(userId) {
//   console.log(userId);

//   fetch(`http://localhost/projectwego/Users/findVehicle/${userId}`, {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json'
//     },
//     body: JSON.stringify({ userId: userId })
//   })
//   .then(response => {
//     if (response.status === 200) {
//       console.log('Successful');
//       // do something on success
//     }
//   })
//   .catch(error => {
//     console.error('Error:', error);
//   });
// }

let user = null;
const view = document.querySelector('#view');
document.addEventListener("DOMContentLoaded", () => fetchUserId());



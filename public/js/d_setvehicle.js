document.querySelectorAll('.clickable-div').forEach(function(div) {
  div.addEventListener('click', function() {
    var path = this.getAttribute('value');
    if (path === 'own-vehicle') {
      console.log('own-vehicle');
      window.location.href = "http://localhost/projectwego/D_ManageDrivers/ownVehicle";
    } else if (path === 'find-vehicle') {
      console.log('find-vehicle');
      window.location.href = "http://localhost/projectwego/D_ManageDrivers/findVehicle";
    }
  });
});






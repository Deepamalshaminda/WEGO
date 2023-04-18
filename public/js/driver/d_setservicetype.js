document.querySelectorAll('.clickable-div').forEach(function(div) {
    div.addEventListener('click', function() {
      var path = this.getAttribute('value');
      if (path === 'school-service') {
        console.log('school-service');
        window.location.href = "http://localhost/projectwego/users/schoolService";
      } else if (path === 'office-service') {
        console.log('office-service');
        window.location.href = "http://localhost/projectwego/Users/officeService";
      }
    });
  });
  
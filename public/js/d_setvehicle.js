<script>
    function getPathValue(value) {
        document.querySelectorAll('.clickable-div').forEach(function(div) {
            div.addEventListener('click', function() {
              var path = this.getAttribute('value');
              if (path === 'own-vehicle') {
                window.location.href = "<?php echo URLROOT; ?>/pages/ownvehicle";
              } else if (path === 'find-vehicle') {
                window.location.href = "<?php echo URLROOT; ?>/pages/findvehicle";
              }
            });
          })
    }
</script>
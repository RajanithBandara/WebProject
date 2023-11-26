document.addEventListener('DOMContentLoaded', function () {
    function applyFilter() {
      var selectedStream = document.getElementById('Stream').value;
      var selectedLocation = document.getElementById('location-filter').value;
  
      var institutions = document.querySelectorAll('.Institutions');
      institutions.forEach(function (institution) {
        anime({
          targets: institution,
          opacity: 0,
          duration: 500,
          easing: 'easeInOutQuad',
          complete: function () {
            institution.style.display = 'none';
  
            var stream = institution.getAttribute('data-stream');
            var location = institution.getAttribute('data-location');
  
            if (
              (selectedStream === 'all' || stream === selectedStream) &&
              (selectedLocation === 'all' || location === selectedLocation)
            ) {
              anime({
                targets: institution,
                opacity: 1,
                duration: 500,
                easing: 'easeInOutQuad',
                begin: function () {
                  institution.style.display = 'block';
                },
              });
            }
          },
        });
      });
    }
  
    document.getElementById('apply-filter').addEventListener('click', applyFilter);
  });
  
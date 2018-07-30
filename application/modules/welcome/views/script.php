<script>
    function myMap() {
      var mapOptions = {
        center: new google.maps.LatLng(5.549344, 95.317630),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.HYBRID
      }
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6FO9mbBR-4uIfKaGeKh2NPagQN2alD04&callback=myMap"></script>

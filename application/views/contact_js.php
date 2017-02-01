<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTdn0y9CUgqyKR2uFRtLobMubUg3boyCU"></script>
<script>
function initialize() {
    var myLatLng = {lat: 16.402158, lng: 120.596926};

    var mapCanvas = document.getElementById('map');
    var mapOptions = {
        center: myLatLng,
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'DOCPRO Business Solutions, CYA Building'
    });                  
}             
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script>
    $(document).ready(function(){
        $('#top-bar').addClass('white');
        $('#top-bar .navbar-nav li').removeClass('active');
        $('#top-bar .navbar-nav li:nth-last-child(4)').addClass('active');
    });
</script>
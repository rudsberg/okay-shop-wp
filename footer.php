<!-- FOOTER SECTION -->
<section id="footer-section" class="py-4">
  <div class="container">
    <div class="row">
      <div class="col text-white">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <div class="text-left mr-auto">
            Copyright &copy; 2018
          </div>
          <div class="text-center mx-auto">
            Opening Hours<br> From November to April<br> Open 7 days a week<br> Lunch break 12.00 - 13.00
          </div>
          <div class="text-right ml-auto">
            <a href="tel:+41416370777">+41 41 637 0 777</a><br>
            <a href="mailto:okay.dani@gmx.ch">okay.dani@gmx.ch</a><br>
            <a href="#map">Bahnhofstr. 10<br>
              6390 Engelberg
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php wp_footer(); ?>

<!-- Google Maps API Script -->
<script>
  function initMap() {
    var uluru = {lat: 46.819589, lng: 8.403062};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfWUO18JsKW47UWTudR_Fp1TR0UPY9U6s&callback=initMap">
</script>
<!-- END Google maps API Script -->

</body>
</html>

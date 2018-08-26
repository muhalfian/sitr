    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <a class="foot-logo" href="#"><img src="images/SITR_2.png" width=100% alt=""></a>

                            <p>SITR Jatim merupakan Informasi Data dan Peta berbasis Sistem Informasi Geografis dari RT/RW Provinsi Jawa Timur</p>

                            <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Hubungi Kami</h2>

                            <ul>
								<li><b>BAPPEDA PROVINSI JAWA TIMUR<br>
								Bidang Pengembangan Regional</b></li>
                                <li>Phone: (031) 355 0528</li>
								<li>Email: tarujatim@gmail.com</li>
							</ul>
                        </div><!-- .foot-contact -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="quick-links flex flex-wrap">
                            <h2 class="w-100">Quick Links</h2>

                            <ul class="w-100">
                                <li><a href="#">BAPPEDA JATIM </a></li>
                                <li><a href="#">Bappenas</a></li>
                                <li><a href="#">Pusat Jaringan Dokumentasi </a></li>
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                        <div class="follow-us">
							<h2 style="margin-bottom : 10px !important;">Hit Counter</h2>
							<div align=center><a href='https://www.counter12.com'><img src='https://www.counter12.com/img-xYZZc0B2C0BcwCZx-3.gif' border='0' alt='counter'></a><script type='text/javascript' src='https://www.counter12.com/ad.js?id=xYZZc0B2C0BcwCZx'></script></div>
							
						</div>
						<div class="follow-us">
                            <h2>Follow Us</h2>

                            <ul class="follow-us flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!-- .quick-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

    </footer><!-- .site-footer -->

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5zheeMen88nhom_No4-XUd8-W0fOSFY&callback=initMap"></script>

<script>
	// --------------- GOOGLE MAP ----------------

	// Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
	  

	  // ----------------- Carousel Slick -------------------
	  
	  $(document).ready(function(){
			$('.myCarousel3').slick({
				infinite: true,
				slidesToShow: 2,
				slidesToScroll: 2,
				autoplay : true,
				autoplaySpeed : 5000,
				dots: true,
				arrows : true
			});
			
			$('.myCarousel4').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3,
				autoplay : true,
				autoplaySpeed : 5000,
				dots: true,
				arrows : true
			});
		});
</script>
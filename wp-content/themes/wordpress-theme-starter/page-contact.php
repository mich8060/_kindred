<?php get_header(); ?>
<main role="main">       
	<div class="hero short" style="margin-bottom:0;"><img src="<?php echo get_template_directory_uri(); ?>/img/contact.jpg" alt="" /></div>
	<div class="clear"></div>
	<div class="container">
		<div class="col-lg-12">
			<h1 class="page_title caps" style="font-weight:700;margin-bottom:10px;padding-bottom:0;"><?php echo the_title(); ?></h1> 
			<h1 class="page_title caps" style="padding-top:0;">Use the form below to contact Primus Healthcare Consulting.</h1>
			<hr /> 
			<div class="gap40"></div>
		</div>
		<div class="fade_in">
		<div class="col-lg-6 col-sm-12">        
			<div class="maps"><div id="map1" class="maps_frame"></div></div>
			<address>
				<p>United States</p> 
				170 North State Street<br />
				Salt Lake City, UT 84103
	            <p>Telephone: <a href="tel:1-801-598-3333">+1-801-598-3333</a></p>
			</address>
		</div>
		<div class="col-lg-6 col-sm-12">
			<div class="maps"><div id="map2" class="maps_frame"></div></div>
			<address>
				<p>Middle East</p> 
				44 West Bay Tower #31C<br /> 
				Doha, Qatar
	            <p>Telephone: <a href="tel:974-7445-9864">+974-7445-9864</a></p>
			</address>  
	 	</div> 
		</div> 
		<div class="col-lg-12">
			<hr class="line" />
			<div class="gap40"></div>
			<h3>Contact Form</h3> 
			<div class="gap30"></div>
		</div>
		<?php echo do_shortcode('[sitepoint_contact_form]'); ?>                     
		<div class="clear"></div>
	</div>
</main>
<script type="text/javascript">

	function initMap() {
        var myLatLng = {lat: 25.330285, lng: 51.534153};
        var map = new google.maps.Map(document.getElementById('map2'), {
          	zoom: 15, 
			scrollwheel: false,  
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        disableDefaultUI: true,
          	center: myLatLng
        });
        var marker = new google.maps.Marker({ 
      		animation: google.maps.Animation.DROP,
          	position: myLatLng,
          	map: map,
          	title: 'Hello World!'
        }); 
        
        var myLatLng = {lat:40.773206, lng: -111.8900687};
        var map = new google.maps.Map(document.getElementById('map1'), {
          	zoom: 17, 
			scrollwheel: false,  
	        mapTypeId: google.maps.MapTypeId.ROADMAP,
	        disableDefaultUI: true,
          	center: myLatLng
        });
        var marker = new google.maps.Marker({ 
      		animation: google.maps.Animation.DROP,
          	position: myLatLng,
          	map: map,
          	title: 'Hello World!'
        });
	}

</script>
<style type="text/css">
	.home-contact { display:none; }
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD3Ew2ONaGotZmiYs1e0w_jkCVajzg4iKA&callback=initMap"></script>
<?php get_footer(); ?>
<?php
	/* 
	 *	Template Name: Map
	*/
?>
<!-- start inlude header -->
<?php include 'header.php'; ?>
<!-- end inlude header -->
<?php get_template_part('banner', 'interior' ); ?>
<?php get_template_part('navigation', 'noitems' ); ?>

	<!-- start .site-main -->
	<div class="site-main">
<div id="main-content" class="main-content">
	<div class="site-main">
<style>
	#map-canvas img{
		max-width: none;
	}
	#map-canvas {
        	height: 250px;
        	width: 100%;
        	margin: 20px auto 20px auto;
        	padding: 0px;
		border: 2px solid black;
      	}
	#map-address{
		margin: 0 auto 10px auto;
		width: 50%;
		font-size: 24px;
	}
	@media all and (max-width: 550px){
		#map-canvas {
			width: 100%;
			//height: auto;
		}
		#map-address{
			font-size: 15px;
		}
	}
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
	var map;
       	function initialize() {
		var lat;
		var lng;
		var xhr = new XMLHttpRequest();
		xhr.open('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address=<?php echo urlencode($_REQUEST['address']); ?>');
		xhr.onload = function() {
    			if (xhr.status === 200) {
				var tmp = JSON.parse(xhr.responseText);
        			var startPoint = new google.maps.LatLng(tmp.results[0].geometry.location.lat, tmp.results[0].geometry.location.lng);
              			var mapOptions = {
                     			zoom: 11,
                     			center: startPoint
              			};
              			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				var marker = new google.maps.Marker({position: startPoint, map: map});
    			}else {
        			alert('Request failed.  Returned status of ' + xhr.status);
    			}
		};
		xhr.send();
       	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
		<div class="container">
			<div id="map-canvas">
			</div>
			<h1 id="map-address"><?php echo $_REQUEST['address']; ?></h1>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_template_part( 'promo', 'featured' ); ?>

<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
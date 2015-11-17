	<!-- start .interior-banner -->
	<div class="interior-banner">		
<?php
	$bannerUrl;
	if(get_post_type() == 'project'){
		if(get_post_thumbnail_id()){
			$bannerUrl = wp_get_attachment_url(get_post_thumbnail_id());
		}else{
			$bannerUrl = esc_url( get_theme_mod('test_banner'));
		}
	}else{
		$bannerUrl = esc_url( get_theme_mod('test_banner'));
	}
?>
		<div class="banner-image" style="background-image: url('<?php echo $bannerUrl; ?>');">
			<div class="top-border"></div>
			<div class="table">
				<div class="table-cell">
					<div class="container">
						<h1><?php echo wp_title(); ?></h1>	
					</div>
				</div>
			</div>		
		</div>
		<div class="bottom-bg"></div>
	</div>
	<!-- end .interior-banner -->
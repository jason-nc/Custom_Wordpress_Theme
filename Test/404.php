<?php get_header(); ?>
	<!-- start .interior-banner -->
	<div class="interior-banner">	
		<div class="banner-image" style="background-image: url('<?php echo esc_url( get_theme_mod( 'test_banner' ) ); ?>');">
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

	<!-- start .top-bar -->
	<div class="top-bar">
		<div class="container">	
			<!-- start .breadcrumbs -->
			<div class="breadcrumbs visible-desktop">
				<div class="table">
					<div class="table-cell">
			            <div class="clear"></div>	
					</div>
				</div>		
			</div>
			<!-- end .breadcrumbs -->
			<!-- start .mobile-breadcrumbs -->
			<div class="mobile-mask hidden-desktop"></div>
			<div class="mobile-breadcrumbs hidden-desktop">
                <div class="clear"></div>
			</div>
			<!-- end .mobile-breadcrumbs -->
			<div class="clear"></div>
		</div>	
	</div>
	<!-- start .top-bar -->

	<!-- start .site-main -->
	<div class="site-main">
		<div class="container">
			<!-- start .archives -->
			<div class="archives">
				<!-- start .archives-ct -->
				<div class="archives-ct">
					<!-- start .entry-small -->
					<div class="entry-small">
					<!-- start .entry-small-title -->
					<div class="entry-small-title">
						<div class="table">
							<div class="table-cell">
								<h2>Sorry, the page you are looking for is not on this site.</h2>
							</div>
						</div>
					</div>
					<!-- end .entry-small-title -->
					<!-- start .WYSIWYG -->
					<div class="wysiwyg">
						<p>Try our Search form at the top of the page to help you find what you are looking for.</p>
					</div>
					<!-- start .WYSIWYG -->
					<div class="clear"></div>
				</div>
				<!-- end .entry-small -->
				</div>
				<!-- end .archives-ct -->
			</div>
			<!-- end .archives -->
			
		</div>
	</div>
	<!-- end .site-main -->
<?php get_footer(); ?>
<!-- start inlude header -->
<?php include 'header.php'; ?>
<!-- end inlude header --> 
<?php get_template_part('banner', 'interior' ); ?>
<?php get_template_part('navigation', 'secondary' ); ?>
<!-- start .site-main -->
<div class="site-main">
	<div id="main-content" class="main-content">

	<div class="site-main">
		<div class="container">

			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>
			<!-- start .entry -->
			<div class="entry">
				
				<!-- start .project-rotator -->
				<div class="project-rotator">
					<!-- start controls -->	
					<div class="project-rotator-pager"></div>
					<!-- end controls -->
					<!-- start .slides -->
					<div class="slides" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz>
					<?php
						$slides = get_post_meta(get_the_ID(), 'gallery_data', true);
						foreach($slides['image_url'] as $slide){
					?>
						<!-- start .slide ===== image height 360 px -->
						<div class="slide" style="background-image: url('<?php echo $slide; ?>');">
						</div>
						<!-- end .slide -->
					<?php
						}
					?>
					</div>
					<!-- end .slides -->	
				</div>
				<!-- end .project-rotator -->

				<!-- start .WYSIWYG -->
				<div class="wysiwyg">
			<?php
					the_content();
			?>
				</div>
				<!-- start .WYSIWYG -->
			<?php
				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->
<?php get_template_part( 'promo', 'featured' ); ?>
<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
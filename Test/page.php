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
					the_content();
				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_template_part( 'promo', 'featured' ); ?>

<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
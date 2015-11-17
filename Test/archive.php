<?php
	/* 
	 *	Template Name: Archive
	*/
?>
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
			<!-- start .archives -->
			<div class="archives">
				<!-- start .archives-ct -->
				<div class="archives-ct">	
		<?php the_post(); ?>
					<!-- start .entry-small -->
					<div class="entry-small">
					<!-- start .entry-small-title -->
					<div class="entry-small-title">
						<div class="table">
							<div class="table-cell">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							</div>
						</div>
					</div>
					<!-- end .entry-small-title -->
<?php get_search_form(); ?>
					<!-- start .entry-small-title -->
					<div class="entry-small-title">
						<div class="table">
							<div class="table-cell">
								<h2><a href="<?php the_permalink() ?>">Archives by Month:</a></h2>
								
								<ul>
									<?php wp_get_archives('type=monthly'); ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- end .entry-small-title -->
					<!-- start .entry-small-title -->
					<div class="entry-small-title">
						<div class="table">
							<div class="table-cell">
								<h2><a href="<?php the_permalink() ?>">Archives by Subject:</a></h2>
								
								<ul>
									<?php wp_list_categories(); ?>
								</ul>
							</div>
						</div>
					</div>
					<!-- end .entry-small-title -->
				<!-- end .archives-nav -->	
			</div>
			<!-- end .archives -->
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_template_part( 'promo', 'featured' ); ?>

<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
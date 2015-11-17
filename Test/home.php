<!-- start inlude header -->
<?php
	/* 
	 *	Template Name: Home
	*/
?>
<?php include 'header.php'; ?>
<!-- end inlude header --> 

	<!-- start .main-rotator -->
	<div class="main-rotator">
		<div class="top-border"></div>
		<!-- start controls -->
		<div class="main-rotator-prev visible-desktop"></div>
		<div class="main-rotator-next visible-desktop"></div>	
		<div class="main-rotator-pager"></div>
		<!-- end controls -->
		<!-- start .slides -->
		<div class="slides" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz>
			<?php
				$the_query = new WP_Query( array( 'category_name' => 'Main Slider', 'order' => 'DESC', 'orderby' => 'tag') );
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<!-- start .slide -->
			<div class="slide" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');">
				<div class="table">
					<div class="table-cell">
						<div class="container">
							<div class="caption">
								<h2><?php the_title(); ?></h2>	
								<p class="hidden-phone"><?php the_content(); ?></p>	
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- end .slide -->
			<?php
				endwhile; endif;
			?>
		</div>
		<!-- end .slides -->
		<div class="bottom-bg"></div>
	</div>
	<!-- end .main-rotator -->

	<!-- start .introduction -->
	<div class="introduction">
		<div class="top-border"></div>
		<div class="container">
			<h1><?php echo get_theme_mod('introduction_title'); ?></h1>
			<p><?php echo get_theme_mod('introduction_body'); ?></p>
		</div>
		<!-- start .home-features -->
		<div class="home-features">
			<ul>
				<!-- start .feature -->
				<li class="feature blue">
					<div class="feature-bg" style="background-image: url('images/feature-1-img.jpg');"></div>
					<a href="<?php echo esc_url(get_theme_mod( 'free_estimate_url')); ?>">
						<span class="table">
							<span class="table-cell">
								<span class="txt">
									Request a Free Estimate<br>
									<span>Excavation • Grading • Hauling</span>
								</span>		
							</span>
						</span>	
					</a>
				</li>
				<!-- end .feature -->
				<!-- start .feature -->
				<li class="feature promotion">
					<div class="feature-bg" style="background-image: url('images/feature-promotion-bg.jpg');">
						<img class="visible-desktop" src="images/feature-promotion-img.png" alt="">
					</div>
					<a href="<?php echo esc_url( get_theme_mod('featured_promotion_url')); ?>">
						<span class="table">
							<span class="table-cell">
								<span class="txt">Feature Promotion</span>		
							</span>
						</span>	
					</a>
				</li>
				<!-- end .feature -->
			</ul>
			<div class="clear"></div>
		</div>
		<!-- end .home-features -->
	</div>
	<!-- end .introduction -->

	<!-- start .latest-news -->
	<div class="latest-news">
		<div class="top-border"></div>
		<div class="title">
			<h3>Latest News</h3>
			<div class="left-bg"></div>
			<div class="right-bg"></div>
		</div>
		<div class="container">
			<ul>
			<?php
				$the_query = new WP_Query( array('category_name' => 'News', 'order' => 'DESC', 'orderby' => 'date', 'posts_per_page' => 4));
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<li>
					<?php 
						$content = get_the_content();
						if(strlen($content) > 175){
							echo substr($content, 0, 175);
						?>…
							<a href="<?php the_permalink(); ?>" class="more">MORE »</a>
						<?php
						}else{
							echo $content;
						}
					?>
				</li>
				<?php endwhile; endif; ?>
				<div class="clear"></div>
			</ul>
			<div class="view-all">
				<a href="<?php echo get_page_by_title('News')->guid; ?>">View All</a>
				<div class="left-bg"></div>
				<div class="right-bg"></div>		
			</div>			
		</div>
	</div>
	<!-- end .latest-news -->
<?php
	get_template_part('slider', 'testimonial'); 
?>
<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
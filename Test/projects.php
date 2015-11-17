<!-- start inlude header -->
<?php
	/* 
	 *	Template Name: Project
	*/
?>
<?php include 'header.php'; ?>
<!-- end inlude header --> 
<?php 	
	get_template_part('banner', 'interior' );
	get_template_part('navigation', 'secondary' ); 
?>
<div id="main-content" class="main-content">

	<!-- start .projects -->
	<div class="projects">
<?php 
	$the_query = new WP_Query( array( 'post_type' => 'project', 'order' => 'DESC', 'orderby' => 'date', 'posts_per_page' => -1) );
	 if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>
		<!-- start .project -->
		<div class="project">
			<div class="project-image" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>');">
			</div>
			<div class="project-icon">
				<div class="plus-icon"></div>				
			</div>
			<div class="project-title">	
				<span class="table">
					<span class="table-cell">
						<?php echo get_the_title();?>		
					</span>
				</span>	
			</div>
			<div class="project-details">
				<div class="project-details-ct">
					<div class="table">
						<div class="table-cell">
							<h3><?php echo get_the_title();?></h3>	
						</div>
						<div class="table-cell">
							<p><?php echo substr(get_the_content(),0, 125); ?>...</p>
							<a href="<?php the_permalink(); ?>" class="more">Read More <i class="fa fa-angle-right"></i></a>
						</div>
					</div>
					<a class="addthis_button share" addthis:url="#" 
	                style=""  addthis:title="#" 
	                addthis:description="#" 
	                href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=xa-51e5418f145ec050">
	                	Share 
	                </a>	
				</div>
			</div>
		</div>
		<!-- end .project -->
<?php
	endwhile; endif;
?>
		<div class="clear"></div>
	</div>
	<!-- end .projects -->

<?php
	get_template_part('slider', 'testimonial'); 
?>

<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
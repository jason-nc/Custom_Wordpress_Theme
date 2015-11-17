<?php
/**
 * Template Name: Search
 *
 */

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach
$search_query['paged'] = $paged;
$search = new WP_Query($search_query);
get_header(); ?>
<?php get_template_part('banner', 'interior' ); ?>
<?php get_template_part('navigation', 'noitems' ); ?>

	<!-- start .site-main -->
	<div class="site-main">
		<div class="container">
			<!-- start .archives -->
			<div class="archives">
				<!-- start .archives-ct -->
				<div class="archives-ct">
		<?php
			if ( $search->have_posts() ) : 
				// Start the Loop.
				while ( $search->have_posts() ) : $search->the_post(); 
		?>
					<!-- start .entry-small -->
					<div class="entry-small">
					<!-- start .entry-small-title -->
					<div class="entry-small-title">
						<div class="table">
							<div class="table-cell">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
							</div>
						<div class="table-cell"><a class="addthis_button btn" href="http://www.addthis.com/bookmark.php?v=300&amp;pubid=xa-51e5418f145ec050">
Share<i class="fa fa-chevron-down right-side"></i>
</a></div>						</div>
					</div>
					<!-- end .entry-small-title -->
					<!-- start .entry-small-image -->
					<?php if (has_post_thumbnail( $post->ID ) ): ?>
						<div class="entry-small-image">
							<a href="#"><?php the_post_thumbnail(); ?></a>
						</div>
					<?php endif; ?>
					<!-- end .entry-small-image -->
					<!-- start .WYSIWYG -->
					<div class="wysiwyg">
						<?php the_content(); ?>
					</div>
					<!-- start .WYSIWYG -->
						<?php comments_template(); ?>
					<div class="clear"></div>
				</div>
				<!-- end .entry-small -->
		<?php		endwhile; ?>
		<?php	endif; ?>
				</div>
				<!-- end .archives-ct -->
				<!-- start .archives-nav -->
				<div class="archives-nav">
					<?php
					if($paged < $the_query->max_num_pages){
					?>
					<div class="btn">
						<i class="fa fa-chevron-left left-side"></i>
						<?php next_posts_link( 'Newer', $the_query->max_num_pages ); ?>
					</div>
					<?php
					}
					if($paged > 1){
					?>
					<div class="btn">
						<?php previous_posts_link('Older'); ?>
						<i class="fa fa-chevron-right right-side"></i>
					</div>
					<?php
					}
					?>
				</div>
<?php
	wp_reset_postdata(); 
?>
				<!-- end .archives-nav -->	
			</div>
			<!-- end .archives -->
			
		</div>
	</div>
	<!-- end .site-main -->


<?php  get_footer(); ?>
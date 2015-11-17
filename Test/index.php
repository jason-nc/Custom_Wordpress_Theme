<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php get_template_part('navigation', 'secondary' ); ?>

<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
		?>
			<div <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php if(has_post_thumbnail()) : ?>
					<div class="post-thumb">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
				<?php endif; ?>
				<?php the_content(''); ?>
				<ul class="meta">
					<li><?php the_time('F jS, Y'); ?></li>
					<li>Posted in <?php the_category(''); ?></li>
					<li><?php comments_number('No Comments','1 Comments','% Comments'); ?></li>
				</ul>
			</div>
		<?php		endwhile; ?>
			<div class="pagination">
				<ul>
					<li class="older"><?php next_posts_link('Older'); ?></li>
					<li class="newer"><?php previous_posts_link('Newer'); ?></li>
				</ul>
			</div>
		<?php else: ?>
			<h2>Nothing Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<p><a href="<?php echo get_option('home'); ?>">Return to the Home page</a></p>
		<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->
<?php get_template_part( 'promo', 'featured' ); ?>

<?php
get_footer();

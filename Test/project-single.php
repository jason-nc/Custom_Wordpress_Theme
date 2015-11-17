<!-- start inlude header -->
<?php
	/* 
	 *	Template Name: Project Single
	*/
?>
<?php include 'header.php'; ?>
<!-- end inlude header --> 
<?php
	print_r(get_post_meta(160, 'gallery_data', true));
	$the_query = new WP_Query( array( 'post_type' => 'project' ) );

if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	print_r(get_post_meta($post->ID, 'gallery_data', true));
endwhile; endif;
?>
<?php get_template_part('banner', 'interior' ); ?>
<?php get_template_part('navigation', 'secondary' ); ?>
<div id="main-content" class="main-content">


	<!-- start .site-main -->
	<div class="site-main">
		<div class="container">
			
			<!-- start .entry -->
			<div class="entry">
				
				<!-- start .project-rotator -->
				<div class="project-rotator">
					<!-- start controls -->	
					<div class="project-rotator-pager"></div>
					<!-- end controls -->
					<!-- start .slides -->
					<div class="slides" data-cycle-swipe=true data-cycle-swipe-fx=scrollHorz>
						<!-- start .slide ===== image height 360 px -->
						<div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/rotator-img-1.jpg');">
						</div>
						<!-- end .slide -->
						<!-- start .slide -->
						<div class="slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/rotator-img-2.jpg');">
						</div>
						<!-- end .slide -->
					</div>
					<!-- end .slides -->	
				</div>
				<!-- end .project-rotator -->

				<!-- start .WYSIWYG -->
				<div class="wysiwyg">
					<h2 class="darkblue">Ipsum dolor sit amet, consectetur adipisicing elit</h2>					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
					esse cillum dolore eu fugiat nulla pariatur.</p>					
					<h3 class="lightblue">Ipsum dolor sit amet, consectetur adipisicing elit consectetur adipisicing elit</h3>
					<img class="alignright" src="images/interior-img.jpg" alt="">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit amet, 
					consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
					nisi ut.</p>
					<h3 class="orange">Ipsum dolor sit amet, consectetur adipisicing</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore e
					t dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
					ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni 
					dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
					sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore 
					magnam aliquam quaerat voluptatem.</p>
					<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni 
					dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
					sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore 
					magnam aliquam quaerat voluptatem. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
					dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor 
					sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore 
					magnam aliquam quaerat voluptatem.</p>
					<ol>
						<li>Title number One</li>
						<li>Title Number Two</li>
						<li>Title Number Three</li>
					</ol>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit <a href="#">esse cillum dolore 
					eu fugiat nulla pariatur</a>. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
					officia deserunt mollit anim id est laborum.</p>
					<ul>
						<li>Title Number One</li>
						<li>Title Number Two</li>
						<li>Title Number Three</li>
					</ul>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
					officia deserunt mollit anim id est laborum.</p>
					<!-- start .table-holder -->
					<div class="table-holder">
						<table>
							<tr>
								<th class="light">Duis aute</th>
								<th class="light">Irure dolor</th>
								<th class="light">Reprehenderit velit</th>
								<th class="light">Esse Cillum</th>
							</tr>
							<tr>
								<td>Irure dolor</td>
								<td>Reprehenderit velit</td>
								<td>Esse Cillum</td>
								<td>Duis aute</td>
							</tr>
						</table>
						<span class="msg visible-phone">Swipe horizontally to view all fields.</span>	
					</div>
					<!-- end .table-holder -->
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
					officia deserunt mollit anim id est laborum.</p>
					<blockquote>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
						commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
						eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
						officia deserunt mollit anim id est laborum.</p>	
					</blockquote>
				</div>
				<!-- start .WYSIWYG -->

			</div>
			<!-- end .entry -->
			
		</div>
	</div>
	<!-- end .site-main -->

<?php get_template_part( 'promo', 'featured' ); ?>

<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
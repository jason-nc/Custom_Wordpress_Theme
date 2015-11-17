<!-- start inlude header -->
<?php
	/* 
	 *	Template Name: News
	*/
$post_info = array();
$topics = 0;
$author = 1;
$monthAndYear = 2;

$the_query = new WP_Query( array( 'category_name' => 'News' ) );
if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	$posttags = get_the_tags();
	if($posttags){
  		foreach($posttags as $tag) {
    			$post_info[$topics][$tag->name] = $tag->name; 
  		}
	}
	$year = get_the_date('Y','','',false);
	$month = get_the_date('m','','',false);
	$writtenMonth = get_the_date('M','','',false);
	$post_info[$author][get_the_author()] = get_the_author_id();  
	$post_info[$monthAndYear][$writtenMonth . ' ' . $year] = $year . '-' . $month;
endwhile; else :
					
endif;
wp_reset_postdata();
?>
<?php include 'header.php'; ?>
<!-- end inlude header --> 
<?php get_template_part('banner', 'interior' ); ?>
	<!-- start .top-bar -->
	<div class="top-bar">
		<div class="container">	
			<!-- start .related-items -->
			<div class="related-items">
				<!-- start .show-related-items -->
				<div class="show-related-items">
					<div class="icon">
						<div class="indicator"></div>
					</div>
					<div class="text visible-desktop">
						Sort News	
					</div>
					<div class="clear"></div>
				</div>
				<!-- end .show-related-items -->
				<!-- start .related-items-ct -->
				<div class="related-items-ct">
					<!-- start .sort-navigation -->
		            <div class="sort-navigation">				                
		                <!-- start .sort-navigation-item -->
		                <div class="sort-navigation-item">
		                	<h3>Blog Topic</h3>
							<!-- start .sort-archives -->
				            <div class="sort-archives">
				                <h4>
				                	Sort By Topic
				                	<span class="icon">
				                		<span class="table">
								            <span class="table-cell">
								                <span class="bars"></span>
								            </span>
								        </span>
								        <span class="active-state">
								            <span class="table">
								                <span class="table-cell">
								                    <span class="active-bars"></span>
								                </span>
								            </span>
								        </span>
				                	</span>
				                </h4>
				                <ul>
				                    <div class="sort-archives-ct">
							<?php
							foreach($post_info[$topics] as $tags){
							?>
				                        <li>
				                            <a href="<?php get_permalink(); ?>?currentTopic=<?php echo $tags; ?>"><?php echo $tags; ?></a>
				                        </li>
							<?php
							}
							?>
				                    </div>                    
				                </ul>
				            </div>
				            <!-- end .sort-archives -->	
		                </div>
		                <!-- end .sort-navigation-item -->
		                <!-- start .sort-navigation-item -->
		                <div class="sort-navigation-item">
		                	<h3>Contributor</h3>
							<!-- start .sort-archives -->
				            <div class="sort-archives">
				                <h4>
				                	Name of Contributor
				                	<span class="icon">
				                		<span class="table">
								            <span class="table-cell">
								                <span class="bars"></span>
								            </span>
								        </span>
								        <span class="active-state">
								            <span class="table">
								                <span class="table-cell">
								                    <span class="active-bars"></span>
								                </span>
								            </span>
								        </span>
				                	</span>
				                </h4>
				                <ul>
				                    <div class="sort-archives-ct">
							<?php
							foreach($post_info[$author] as $author => $authorId){
							?>
				                        <li>
				                            <a href="<?php get_permalink(); ?>?currentAuthor=<?php echo $authorId; ?>"><?php echo $author; ?></a>
				                        </li>
							<?php
							}  
							?>
				                    </div>                    
				                </ul>
				            </div>
				            <!-- end .sort-archives -->	
		                </div>
		                <!-- end .sort-navigation-item -->
		                <!-- start .sort-navigation-item -->
		                <div class="sort-navigation-item">
		                	<h3>Archive</h3>
							<!-- start .sort-archives -->
				            <div class="sort-archives">
				                <h4>
				                	Month and Year
									<span class="icon">
				                		<span class="table">
								            <span class="table-cell">
								                <span class="bars"></span>
								            </span>
								        </span>
								        <span class="active-state">
								            <span class="table">
								                <span class="table-cell">
								                    <span class="active-bars"></span>
								                </span>
								            </span>
								        </span>
				                	</span>
				                </h4>
				                <ul>
				                    <div class="sort-archives-ct">
							<?php
							foreach($post_info[$monthAndYear] as $writtenDate => $numberDate){
							?>
				                        <li>
				                            <a href="<?php get_permalink(); ?>?currentDate=<?php echo $numberDate; ?>"><?php echo $writtenDate; ?></a>
				                        </li>
							<?php
							} 
							?>
				                    </div>                    
				                </ul>
				            </div>
				            <!-- end .sort-archives -->	
		                </div>
		                <!-- end .sort-navigation-item -->
		            </div>
		            <!-- end .sort-navigation -->
		        </div>
		        <!-- end .related-items-ct -->
			</div>
			<!-- end .related-items -->
			<!-- start .breadcrumbs -->
			<div class="breadcrumbs visible-desktop">
				<div class="table">
					<div class="table-cell">
						<ul>
						<?php 
							$pageHiechary = '';
							$curPost = get_post(get_the_ID());
							while($curPost->post_parent){
								$pageHiechary = '<li><a href="' . get_permalink($curPost->post_parent) .'">' . get_the_title($curPost->post_parent) . '</a></li><li>/</li>' . $pageHiechary;
								$curPost = get_post($curPost->post_parent);
							}
							$pageHiechary = $pageHiechary . '<li class="active">' . get_the_title(get_the_ID()) . '</li>';
							echo $pageHiechary;
						?>
			            </ul>
			            <div class="clear"></div>	
					</div>
				</div>		
			</div>
			<!-- end .breadcrumbs -->
			<!-- start .mobile-breadcrumbs -->
			<div class="mobile-mask hidden-desktop"></div>
			<div class="mobile-breadcrumbs hidden-desktop">
				<ul>
						<?php 
							$pageHiechary = '';
							$curPost = get_post(get_the_ID());
							while($curPost->post_parent){
								$pageHiechary = $pageHiechary . '<li><a href="' . get_permalink($curPost->post_parent) .'">' . get_the_title($curPost->post_parent) . '</a></li><li>/</li>';
								$curPost = get_post($curPost->post_parent);
							}
							$pageHiechary = '<li class="active">' . get_the_title(get_the_ID()) . '</li><li>/</li>' . $pageHiechary;
							echo $pageHiechary;
						?>
                </ul>
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
<?php 
	$curDate = explode('-', $_REQUEST['currentDate']);
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$the_query = new WP_Query( array( 'category_name' => 'News', 'paged' => $paged, 'tag' => $_GET['currentTopic'], 'author' => $_GET['currentAuthor'], 'year' => $curDate[0], 'monthnum' => $curDate[1], 'order' => 'DESC', 'orderby' => 'date') );
	 if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
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
							<a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
					<?php endif; ?>
					<!-- end .entry-small-image -->
					<!-- start .WYSIWYG -->
					<div class="wysiwyg">
						<?php the_content(); ?>
					</div>
					<!-- start .WYSIWYG -->
					<div class="clear"></div>
				</div>
				<!-- end .entry-small -->
			<?php endwhile; else : ?>
					<div class="entry-small">
						<div class="wysiwyg">
							<p>No News found</p>
						</div>
					</div>	
			<?php endif; ?>
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
<?php get_template_part( 'promo', 'featured' ); ?>

<!-- start inlude footer -->
<?php include 'footer.php'; ?>
<!-- end inlude footer --> 
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
						Related Items	
					</div>
					<div class="clear"></div>
				</div>
				<!-- end .show-related-items -->
				<!-- start .related-items-ct -->
				<div class="related-items-ct">
					<!-- start .links-navigation -->
					<div class="links-navigation">
						<ul>
				<?php 
				$posttags = '';
				$curPostId = $post->ID;

				if(get_post_type() == 'page'){
					$posttags = get_post_meta($post->ID, 'Related', true) .',a';
				}else{
					$tmptags = get_the_tags();
					if ($tmptags) {
  						foreach($tmptags as $tag) {
    							$posttags .= $tag->name . ','; 
  						}
					}
					$posttags .= 'a';
				}
				$the_query = new WP_Query(array(
					'tag' => $posttags, 
					'posts_per_page' => -1, 
					'order' => 'DESC', 
					'orderby' => 'date', 
					'post_type' => array('post', 'project', 'page')
				));
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
					if($curPostId == get_the_ID()){
				?>
			    <li class="current_page_item">
				<?php
					}else{
				?>
			    <li>
				<?php
					}
				?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
				<?php
				endwhile; endif;
				wp_reset_postdata();
				?>
						</ul>	
					</div>
					<!-- end .links-navigation -->
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
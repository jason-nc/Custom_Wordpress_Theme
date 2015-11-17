	<!-- start .top-bar -->
	<div class="top-bar">
		<div class="container">	
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
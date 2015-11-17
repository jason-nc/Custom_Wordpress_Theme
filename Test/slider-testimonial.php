	<!-- start .testimonials -->
	<div class="testimonials">
		<div class="pager"></div>
		<div class="slides">
			<?php
				$the_query = new WP_Query( array( 'category_name' => 'Testimonial Slider', 'order' => 'ASC', 'orderby' => 'tag', 'posts_per_page' => -1) );
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<div class="slide">
				<div class="table">
					<div class="table-cell">
						<div class="container">
							<h3><?php echo get_the_content(); ?></h3>
							<?php
								$author = explode(',', get_the_title());
							?>
							<p class="author"><span><?php echo $author[0]; ?>,</span> <?php echo $author[1]; ?></p>	
						</div>
					</div>
				</div>	
			</div>
			<?php endwhile; endif; ?>
			<div class="pager"></div>						
		</div>
	</div>
	<!-- end .testimonials -->
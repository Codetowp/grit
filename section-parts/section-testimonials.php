<section id="testimonials-block" class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div id="testimonial" class="owl-carousel owl-theme">
					<?php 
						$posts_per_page_testimonial = get_theme_mod( 'grit_testimonial_count' );
						$args = array(
							'post_type'      => 'jetpack-testimonial',
							'posts_per_page' => $posts_per_page_testimonial,
						);
		 
						$project_query = new WP_Query ( $args );
		 
						if ( post_type_exists( 'jetpack-testimonial' ) && $project_query -> have_posts() ) :
		 
							while ( $project_query -> have_posts() ) : $project_query -> the_post();
					?>
								<div class="item"> <?php the_post_thumbnail();?>
									<h5><?php the_content();?></h5>
									<p><strong><?php the_title();?></strong><?php if ( ! has_excerpt() ) {
	                                 echo '';} else { echo strip_tags( get_the_excerpt() ); 
	                                                } 
	                                   ?>
	                               </p>
									</div>
					<?php  	endwhile; endif;  wp_reset_postdata();?>
				</div>
			</div>
		</div>
    </div>
</section>
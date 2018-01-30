<section id="our-work-block">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
				
				<?php 
				$grit_work_header  = get_theme_mod( 'grit_work_header', esc_html__('Section Title', 'grit' ));
				if ($grit_work_header != '') echo '<h2>  ' . wp_kses_post($grit_work_header) . ' </h2>'; 
				?>
				
				
				<?php 
				$grit_work_button_text  = get_theme_mod( 'grit_work_button_text', esc_html__('Read More', 'grit' ));
				
				
				if ($grit_work_button_text != '') echo '<a href="' . esc_url( home_url( '/portfolio' ) ) . '">  ' . wp_kses_post($grit_work_button_text) . ' </a>' ; 
				?>
				
				
			</div>
			<!--/section-title-->
			<div class="clearfix"></div>
			<div class="works">
				<ul class="grid">
					<?php 
					$posts_per_page_portfolio = get_theme_mod( 'grit_work_portfolio_count' );
					$args = array(
						'post_type'      => 'jetpack-portfolio',
						'posts_per_page' => $posts_per_page_portfolio,
					);
					$project_query = new WP_Query ( $args );
					
					if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :
						
						while ( $project_query -> have_posts() ) : $project_query -> the_post();
							?>
							<li>
								<figure>
									<?php the_post_thumbnail('grit_post_preview');?>
									<!--<img src="<?php //echo get_template_directory_uri(); ?>/assets/assets/img/02-screenshot.jpg" alt="Screenshot 01">-->
									<figcaption>
										<div class="caption-content">
											<h6><?php the_title(); ?></h6>
											<hr>

											<?php 
											$before='';
											$after='';
											$separator=',';
											the_terms(get_the_ID(), 'jetpack-portfolio-type', $before, $separator, $after); 
											?>
											<ul class="work-more">
												<li><a href="<?php the_post_thumbnail_url();?>"><i class="fa fa-search"></i></a></li>
												<li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
											</ul>
										</div>
									</figcaption>
								</figure>
							</li>
						<?php  endwhile; endif;  wp_reset_postdata();?>       
					</ul>
				</div>
			</div>
		</div>
	</section>
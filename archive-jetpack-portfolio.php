<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

get_header(); ?>

<!-- banner Page
==========================================-->
<?php
$background_img = get_theme_mod( 'grit_portfolio_bck_ground_image' );
$background_img_static   = get_template_directory_uri() . '/img/in-bg.jpg';
$image = $background_img ? "$background_img" : "$background_img_static";
?>

<div id="page-banner" class="portfolio" style="background-image: url(<?php echo esc_url( $image ); ?>);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>
				<?php
				if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] ){
					echo esc_html( $jetpack_options['page-title'] );		
				} else{
					esc_html_e( 'Portfolio', 'grit' );
				}
				?>
			</h1>
		</div>
	</div>
</div>
<!-- our works block ==========================================-->
<section id="our-work-block">
	<div class="container">
		<div class="row">
			<div class="works"> 
				<!--portfolio grid-->
				<ul class="grid">
				
					<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

						<li class="wow fdeInUp">
							<figure>
								<?php the_post_thumbnail();?>							
								<figcaption>
									<div class="caption-content  wow fdeInUp">
										<h6><?php the_title(); ?></h6>
										<hr>
										<?php 
                                    $before='';
                                    $after='';
									$separator=',';
									the_terms(get_the_ID(), 'jetpack-portfolio-type', $before, $separator, $after); 
									?>
										<ul class="work-more">
											<li><a href="<?php the_permalink();?>" ><i class="fa fa-search"></i></a></li>
											<li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
										</ul>
									</div>
								</figcaption>
							</figure>
						</li>
					<?php 
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</ul>
				<!--/portfolio grid-->

				<div class="clearfix"></div>

				<!--/portfolio page nav-->
				<nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
					<ul>
						<?php
						the_posts_navigation(
							array(
								'prev_text'          => esc_html__( 'Older projects', 'grit' ),
								'next_text'          => esc_html__( 'Newer projects', 'grit' ),
								'screen_reader_text' => esc_html__( 'Projects navigation', 'grit' ),
								)
						);
						?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

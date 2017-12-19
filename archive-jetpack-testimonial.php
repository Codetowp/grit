<?php
/**
 * The archive template for Jetpack testimonial posts.
 *
 * @package Daniela
 */

get_header(); ?>
	<?php $jetpack_options = get_theme_mod( 'jetpack_testimonials' ); ?>

<?php
$background_img = get_theme_mod( 'grit_testimonial_bck_ground_image' );
$background_img_static = get_template_directory_uri() . '/assets/img/in-bg.jpg';
$image = $background_img ? "$background_img" : "$background_img_static";   
?>
<div id="page-banner" style="background-image: url(<?php echo esc_url( $image ); ?>);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1>
				<?php
				if ( isset( $jetpack_options['page-title'] ) && '' != $jetpack_options['page-title'] )
					echo esc_html( $jetpack_options['page-title'] );
				else
					esc_html_e( 'Testimonials', 'grit' );
				?>
			</h1>
		</div>
	</div>
</div>

<section id="our-work-block">
	<div class="container">
		<div class="row">
			<div class="works"> 
			<!--portfolio grid-->
				<ul class="grid">
					<?php if ( have_posts() ) : ?>
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="item">  <?php the_post_thumbnail();?>
								<h5><?php the_excerpt();?></h5>
								<p><strong>Dean Martin</strong> CEO Acme Inc.</p>
							</div>
						<?php  endwhile;
					endif;
					wp_reset_postdata();?>   
				</ul>
				<!--/portfolio grid-->
				<div class="clearfix"></div>
				<!--/portfolio page nav-->
				<nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
					<ul>
						<?php the_posts_navigation( array(
							'prev_text'          => esc_html__( 'Older projects', 'grit' ),
							'next_text'          => esc_html__( 'Newer projects', 'grit' ),
							'screen_reader_text' => esc_html__( 'Projects navigation', 'grit' ),
						) ); ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

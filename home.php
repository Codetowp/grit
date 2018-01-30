<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

get_header(); ?>
<section class="page">
	<div id="page-banner" style="background-image: url( <?php header_image(); ?> );">
		<div class="content wow fadeInUp">
			<div class="container">                
				<?php
				$grit_header_page_text = get_theme_mod( 'grit_latest_news_header', esc_html__( 'Our Blog', 'grit' ) );
				if ( $grit_header_page_text != '' ) echo '<h1>  ' . wp_kses_post( $grit_header_page_text ) . ' </h1>';
				?>
			</div>
		</div>
	</div>
	<div id="page-body">
		<div class="container">
			<div class="row wow fadeInUp"> 
				<!-- Blog page container-->
				<div class="col-md-9 col-sm-7 col-xs-12 page-block"> 
					<?php
					if( have_posts() ):
					// Start of the loop.
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile; 
					?>
					<div class="clearfix"></div>

					<!-- Pagination -->
					<nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
						<ul>
							<?php
							the_posts_pagination( array(
								'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Newer posts', 'grit' ),
								'next_text' => __( 'Older posts', 'grit' ) . ' <i class="fa fa-chevron-right"></i>',
							) );
							?>
							<?php wp_reset_postdata(); ?>
						</ul>
					</nav>
					<?php 
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				</div>
				<!-- Sidebar -->
				<aside class="col-md-3 col-sm-5"> 
					<?php get_sidebar(); ?> 
				</aside>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

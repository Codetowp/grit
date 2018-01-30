<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

get_header(); ?>

	<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
		<div class="content wow fadeInUp">
			<div class="container">
				<header class="page-header">
					<?php
					the_archive_title( '<h1 >', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->
			</div>
		</div>
	</div>
	<div id="page-body">
		<div class="container">
			<div class="row wow fadeInUp"> 
				<!--blog page container-->
				<div class="col-md-12 col-xs-12 page-block"> 
					<?php 
					if ( have_posts() ) : 
					/* Start the Loop */
					while ( have_posts() ) : the_post();					
						get_template_part( 'template-parts/content', 'archive' ); 						
					endwhile;
					?>
					<div class="clearfix"></div>
					<nav class="navigation posts-navigation wow fadeInUp" role="navigation">
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
					<div class="clearfix"></div>
					<?php else :				
					get_template_part( 'template-parts/content', 'none' );
					endif; ?>
				</div>				
			</div>
		</div>
	</div>
<?php
get_footer();

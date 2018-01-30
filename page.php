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
<!-- Banner -->
	<div id="page-banner" style="background-image: url(<?php the_post_thumbnail_url('grit_full_banner'); ?>);">
		<div class="content wow fadeInUp">
			<div class="container">
				<h1><?php the_title();?></h1>
			</div>
		</div>
	</div>
	<!--page body-->
	<div id="page-body">
		<div class="container">
			<div class="row wow fadeInUp"> 
			<!--blog posts container-->
				<div class="col-md-12 page-block">                
					<?php if(have_posts()): while ( have_posts() ) : the_post(); ?> 
					<?php the_content();?>
					<?php endwhile;endif;?>  
					<?php if ( get_edit_post_link() ) : ?>
					<footer class="entry-footer">
						<?php
						edit_post_link(
						  sprintf(
							wp_kses(
							  /* translators: %s: Name of current post. Only visible to screen readers */
							  __( 'Edit <span class="screen-reader-text">%s</span>', 'grit' ),
							  array(
								'span' => array(
								  'class' => array(),
								),
							  )
							),
							get_the_title()
						  ),
						  '<span class="edit-link">',
						  '</span>'
						);
						?>
					</footer><!-- .entry-footer -->
					<?php endif; ?>              
				</div>
				<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grit' ),
					'after'  => '</div>',
					) );
				?>
				<!--blog posts container-->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<?php
get_footer();

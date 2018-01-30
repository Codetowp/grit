<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grit
 */

get_header(); ?>
<section class="page">
	<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
		<div class="content wow fdeInUp">
			<div class="container ">
				<header class="page-header">
					<h1 class="page-title"> <?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'grit' ); ?> </h1>
				</header>
			</div>
		</div>
	</div>
	<div id="page-body">
		<div class="container">
			<div class="row wow fadeInUp"> 
			<!--blog page container-->
				<div class="col-md-9 col-sm-7 col-xs-12 page-block"> 							
					<div class="page-content">
						<p>
							<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'grit' ); ?>
						</p>
						<?php get_search_form();?>
					</div><!-- .page-content -->
				</div>
				<aside class="col-md-3 col-sm-5"> 
					<?php the_widget( 'Grit_WP_Widget_Recent_Posts' ); ?> 
				</aside>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();

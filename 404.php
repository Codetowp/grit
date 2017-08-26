<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package grit
 */

get_header(); ?>

<div id="page-body">
	<div class="container">
		<div class="row  wow fdeInUp"> 
		<!--blog page container-->
			<div class="col-md-9 col-sm-7 col-xs-12 page-block "   > 
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'grit' ); ?></h1>
							</header><!-- .page-header -->
							<div class="page-content">
								<p>
									<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'grit' ); ?>
								</p>
								<?php
									get_search_form();
									the_widget( 'WP_Widget_Recent_Posts' );
								?>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
	</div>
</div>
<?php
get_footer();

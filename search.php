<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package grit
 */
get_header();
 ?>

<section class="page">
    <div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
		<div class="content  wow fdeInUp">
			<div class="container ">
                
                 <?php 
                    $grit_header_page_text = get_theme_mod( 'grit_header_page_text', esc_html__('Session Title', 'grit' ));
                    if ($grit_header_page_text != '') echo '<h1>  ' . wp_kses_post($grit_header_page_text) . ' </h1>'; 
                ?>
                
			</div>
		</div>
	</div>
<div id="page-body">
	<div class="container">
		<div class="row  wow fdeInUp"> 
			<div class="col-md-9 col-sm-7 col-xs-12 page-block "   ><!--blog page container--> 
				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<h1 class="page-title">
							<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'grit' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif; 
				?>
			</div>
		</div>
    </div>
</div>
</section>
<?php
get_footer();

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: Frontpage
 * @package grit
 */
get_header(); ?>

<!--  Header INTRO -->
<?php 
	get_template_part( 'section-parts/section', 'header-intro' );	
?>

<!--  About SECTION -->
<?php
	$disable_about    = get_theme_mod( 'grit_about_check' ) == 1 ? true : false ;
	if ( grit_is_selective_refresh() ) {
		$disable_about = false;
	}
	if ( ! $disable_about) :
	get_template_part( 'section-parts/section', 'about' );
	endif;
?>

<!-- Call to action SECTION  -->
<?php
	$disable_cta    = get_theme_mod( 'grit_contact_check' ) == 1 ? true : false ;
	if ( grit_is_selective_refresh() ) {
		$disable_cta = false;
	}
	if ( ! $disable_cta) :
	get_template_part( 'section-parts/section', 'cta' );
	endif;
?>




<!-- Process SECTION  -->
<?php
	$disable_process    = get_theme_mod( 'grit_process_check' ) == 1 ? true : false ;
	if ( grit_is_selective_refresh() ) {
		$disable_process = false;
	}
	if ( ! $disable_process) :
	get_template_part( 'section-parts/section', 'process' );
	endif;
?>

<!-- Counter SECTION -->
<?php
	$disable_counter    = get_theme_mod( 'grit_counter_check' ) == 1 ? true : false ;
	if ( grit_is_selective_refresh() ) {
		$disable_counter = false;
	}
	if ( ! $disable_counter) :
	get_template_part( 'section-parts/section', 'counter' );
	endif;
?>



<!-- Blog SECTION -->
<?php
	$disable_latest_news    = get_theme_mod( 'grit_latest_news_check' ) == 1 ? true : false ;
	if ( grit_is_selective_refresh() ) {
		$disable_latest_news = false;
	}
	if ( ! $disable_latest_news) :
	get_template_part( 'section-parts/section', 'latest-news' );
	endif;
?>
<?php
get_footer();
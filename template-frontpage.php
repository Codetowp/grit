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
 * Template Name:front-page
 * @package grit
 */
get_header(); ?>
<!-- // banner SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_header_check' ) == 1 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'home-banner' );?>
<?php endif;?>
<!-- // about us SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_about_check' ) == 1 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'about' );?>			
<?php endif;?>
<!-- // contact us SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_contact_check' ) == 1 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'home-contact' );?>
<?php endif;?>
<!-- // our works SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_work_check' ) == 0 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'ourwork' );?>
<?php endif;?>
<!-- // the process SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_process_check' ) == 1 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'process' );?>
<?php endif;?>
<!-- // Company counter SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_counter_check' ) == 1 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'counts' );?>  			
<?php endif;?>
<!-- // Testimonials SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_testimonial_check' ) == 0 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'testimonials' );?>  
<?php endif;?>
<!-- // latest news SECTION -->
<?php
$disable1    = get_theme_mod( 'grit_latest_news_check' ) == 1 ? true : false ;
if ( grit_is_selective_refresh() ) {
	$disable1 = false;
}
if ( ! $disable1) : ?>
<?php  get_template_part( 'section-parts/section', 'latest-news' );?> 
<?php endif;?>
<?php
get_footer();
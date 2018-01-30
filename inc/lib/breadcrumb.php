<?php
/**
 * Breadcrumbs of the theme
 *
 * @package grit
 */

function the_breadcrumb() {
	if ( !is_home() ) {
		echo '<li class="breadcrumb-item">';
		echo '<a href="';
		echo esc_url( home_url( '/' ) );
		echo '">';
		echo esc_html_e( 'Home', 'grit' );
		echo "</a>";
		echo '</li>';
		echo '<li class="breadcrumb-item">';
		if ( is_category() || is_single() ) {
			the_category( ' / ' );			
		} elseif ( is_page() ) {
			echo the_title();
		}
		echo '</li>';
	}
}
?>
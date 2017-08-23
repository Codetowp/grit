<?php
if (!function_exists('text_color_styles'))  {
	function text_color_styles(){
		echo '<style type="text/css" >';
		$color_value = get_theme_mod('header_textcolor', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
		if ( $color_value ) {
			echo "\n" . '#top-header a , .openmenu-nav{' . $append_color . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
add_action( 'wp_head', 'text_color_styles' );

if (!function_exists('grit_paragraph_font_family'))  {
	function grit_paragraph_font_family(){
		echo '<style type="text/css">';
		$fontfamily_value = get_theme_mod('grit_paragraph_font', '');
		$append_family = sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
			echo "\n" .'p{'.$append_family.'}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_paragraph_font_family' );

if (!function_exists('grit_paragraph_font_color'))  {
	function grit_paragraph_font_color(){
		echo '<style type="text/css" >';
		$color_value = get_theme_mod('grit_paragraph_font_color', '');
		$append_color = sprintf( 'color: %s !important;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'p{' . $append_color . '}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_paragraph_font_color' );


if (!function_exists('grit_paragraph_font_size_styles'))  {
	function grit_paragraph_font_size_styles(){
		echo '<style type="text/css" >';
		$fontparagraphfamily_value = get_theme_mod('grit_paragraph_font_size', '');
		$append_para_family_font = sprintf( 'font-size: %spx !important;',  $fontparagraphfamily_value );
			// Output the styles.
		if ( $fontparagraphfamily_value ) {
			echo "\n" . 'p{' . $append_para_family_font . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_paragraph_font_size_styles' );




if (!function_exists('grit_font_family'))  {
	function grit_font_family(){
		echo '<style type="text/css" >';
		$fontfamily_value = get_theme_mod('grit_font_family', '');
		$append_family = sprintf( 'font-family: %s;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
		echo "\n" . 'h1{' . $append_family . '}'."\n".'h2{'.$append_family.'}'."\n".'h3{'.$append_family.'}'.
                "\n".'h4{'.$append_family.'}'."\n".'h5{'.$append_family.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_font_family' );


if (!function_exists('grit_font_size_styles'))  {
	function grit_font_size_styles(){
		echo '<style type="text/css" >';
		$fontfamily_value = get_theme_mod('grit_font_size', '');
		$append_family_font = sprintf( 'font-size: %spx !important;',  $fontfamily_value );
			// Output the styles.
		if ( $fontfamily_value ) {
		echo "\n" . 'h1{' . $append_family_font . '}'."\n".'h2{'.$append_family_font.'}'."\n".'h3{'.$append_family_font.'}'.
                "\n".'h4{'.$append_family_font.'}'."\n".'h5{'.$append_family_font.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_font_size_styles' );


if (!function_exists('grit_font_color'))  {
	function grit_font_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('grit_font_color', '');
		$append_color = sprintf( 'color: %s;',  $color_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . 'h1{' . $append_color . '}'."\n".'h2{'.$append_color.'}'."\n".'h3{'.$append_color.'}'.
                "\n".'h4{'.$append_color.'}'."\n".'h5{'.$append_color.'}' ;
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_font_color' );


if (!function_exists('grit_accent_color'))  {
	function grit_accent_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('grit_accent_color', '');
		$append_color = sprintf( 'background-color: %s;border: 2px %s solid',  $color_value, $color_value );
//        $border_color = sprintf( 'border: 2px %s solid', $color_value )
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . '.section-title a:hover{' . $append_color . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_accent_color' );

if (!function_exists('grit_header_background'))  {
	function grit_header_background(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('grit_header_background_color', '');
        $opacity_value = get_theme_mod('grit_transparnt', '');
		$append_color = sprintf( 'background-color: %s;',  $color_value );
        $append_opacity = sprintf( 'opacity: %s;',  $opacity_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . '#home-banner:before{' . $append_color . '}'. "\n" . '#home-banner:before{' . $append_opacity . '}';
		}
		echo "\n". "</style>". "\n";
	}
}

 // Add custom styles to `<head>`.
add_action( 'wp_head', 'grit_header_background' );

if (!function_exists('grit_count_background_color'))  {
	function grit_count_background_color(){
		echo '<style type="text/css" id="rijo-css">';
		$color_value = get_theme_mod('grit_counter_background_color', '');
        $opacity_value = get_theme_mod('grit_counter_transparnt', '');
		$append_color = sprintf( 'background: %s;',  $color_value );
        $append_opacity = sprintf( 'opacity: %s;',  $opacity_value );
			// Output the styles.
		if ( $color_value ) {
			echo "\n" . '#company-counter:after{' . $append_color . '}'. "\n" . '#company-counter:after{' . $append_opacity . '}';
		}
		echo "\n". "</style>". "\n";
	}
}
 // Add custom styles to `<head>`.

add_action( 'wp_head', 'grit_count_background_color' );
add_action( 'wp_head', 'dblogger_accent_color' );

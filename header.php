<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and full navigation.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grit
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Navigation==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
	<div class="container"> 
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<?php
				$custom_logo = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo , 'full' );
				$logo_img_static = get_template_directory_uri(). '/assets/img/logo-top.png';
				if ( has_custom_logo() )
				{
					$img = esc_url( $logo[0] );
				}
				else
				{
			?>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a></h2>
			<?php 
				}
			?>
			<?php if ( has_custom_logo() ) { ?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php echo esc_url( $img ); ?>" class="img-responsive"><span><?php echo bloginfo( 'name' ); ?></span></a>
			<?php } ?>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 		  
			<!--nav icon--> 
			<a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
			<!--nav icon end-->
			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'menu-1',
					'menu_class'        => 'nav navbar-nav navbar-right',
					'menu_id'           => 'nav-top',
				) );
			?>
			<?php else : ?>
			<ul id="nav-top" class="nav navbar-nav navbar-right">
				<li><a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) );?>"><?php echo esc_html_e( 'Add a Primary Menu', 'grit' );?></a></li>
			</ul>
			<?php endif; ?>

			<!--search form-->
			<?php if( get_theme_mod( 'grit_enable_disable_search_button' ) == 1 ) { ?>
			<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="search">
				<input class="form-control" type="text"  placeholder="<?php echo esc_attr_x( 'Type Here&hellip;', 'placeholder', 'grit' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'grit' ); ?>" size="40" />
			</form>
			<?php }?>
			<!--/search form-->

			<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
			<nav class="bottom-nav">
				<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'container' => 'nav'
					) 
				);
				?>
			</nav>
			<?php endif; ?>
			<ul class="social-link">
				<?php
				if ( $socials = get_theme_mod( 'grit_social') ){
					$socials = $socials ? array_filter( $socials ) : array();
					foreach ( $socials as $social => $name ) {
						printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li> ', esc_url( $name ), esc_html( $social ) );
					}
				}
				if( get_theme_mod( 'social' ) == '' ){ ?>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				<?php } ?>
			</ul>
		</div>
	<!-- /.navbar-collapse --> 
	</div>
  <!-- /.container-fluid --> 
</nav>
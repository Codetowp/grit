<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
<!-- Navigation
    ==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top" style="background-color:#000;">
	<div class="container"> 
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
			</button>
			<?php  
					$custom_logo = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo , 'full' );
					$logo_img_static   = get_template_directory_uri()."/img/logo-top.png";
					
					if ( has_custom_logo() ) 
					{
						$img='<img src="'. esc_url( $logo[0] ) .'" class="img-responsive">';
					} 
					else 
					{
						$img='<img src="'.$logo_img_static.'" class="img-responsive">';
					}
			?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php echo $img; ?><span><?php echo bloginfo( 'name' ); ?></span></a> 
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
			<!--nav icon--> 
			<a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
				<ul id="nav-top" class="nav navbar-nav navbar-right">
				   <?php wp_nav_menu( array( 
						'theme_location' => 'menu-1', 
						'menu_class' => 'nav navbar-nav navbar-right' 
					) );?>
				</ul>        
			<!--search form-->         
			<form method="get" action="/search" id="search">
				<input name="q" type="text" size="40" placeholder="Search..." />
			</form>
			<nav class="bottom-nav">
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Pricing</a></li>
				</ul>
			</nav>
			<ul class="social-link">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			</ul>
		</div>
		<!-- /.navbar-collapse --> 
	</div>
    <!-- /.container-fluid --> 
</nav>

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
<?php
get_footer();

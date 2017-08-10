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
<!-- Navigation
    ==========================================-->
<nav id="top-menu" class="navbar navbar-default navbar-fixed-top">
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
            $logo_img   = esc_url( get_theme_mod( 'logo' ) );   
            $logo_img_static   = get_template_directory_uri()."/img/logo-top.png";
            $image = $logo_img ? "$logo_img" : "$logo_img_static";      
        ?>
      <a class="navbar-brand" href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo $image; ?>" class="img-responsive"><span><?php echo bloginfo( 'name' ); ?></span></a> 
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
   
      <!--nav icon--> 
      <a id="nav-icon"> <span></span> <span></span> <span></span> </a> 
      <!--nav icon end-->
      
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
          <!--/search form--> 
          
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
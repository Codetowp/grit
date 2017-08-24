<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grit
 */

?>

<footer id="bottom-footer">
  <div class="container">
    <div class="row wow fadeInUp">
      <div class="col-md-4 col-sm-4 col-xs-12"> 
        <!--copyright-->
        <p class="copyright">© 2017 Digital Blogger. All rights reserved</p>
        <!--/copyright--> 
      </div>
      <!--bottom nav-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <nav class="bottom-nav">
          <ul>
                <?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu', 
                    'menu_class' => 'bottom-nav' 
                ) );?>
          </ul>
        </nav>
      </div>
      <!--/bottom nav--> 
      
      <!--Social Links-->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <ul class="social-link">
            
              <?php
                if ( $socials = get_theme_mod( 'social' ) ) 
                    {
                        $socials = $socials ? array_filter( $socials ) : array();
                        foreach ( $socials as $social => $name ) 
                            {
                                printf(' <li> <a href="%s" ><i class="fa fa-%s"></i></a></li> ', esc_url( $name ), $social );
                            }
                    }
                if(get_theme_mod( 'social' )=='')
                    {?>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
             <?php } ?>  
        </ul>
      </div>
      <!--/Social Links--> 
      
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<?php if (is_front_page()){ ?>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script> 
<?php } ?>
<script>
new WOW().init();
</script>
</body>
</html>
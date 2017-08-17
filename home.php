<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

get_header(); ?>
<section class="page">
   

<div id="page-banner" style="background-image: url(<?php echo the_post_thumbnail_url('full'); ?>);">
  <div class="content  wow fdeInUp">
    <div class="container ">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>


    
    
<div id="page-body">
  <div class="container">
    <div class="row  wow fdeInUp"> 
      <!--blog page container-->
      <div class="col-md-9 col-sm-7 col-xs-12 page-block "   > 
        
    <?php
          if(have_posts()):
			while ( have_posts() ) : the_post();
      
                   get_template_part( 'template-parts/content', get_post_format() );     
              endwhile; // End of the loop.
        	endif;			
		?>
     
        
        <div class="clearfix"></div>
        
        <!--/portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul>
              
           <?php 	
		     the_posts_pagination( array(
	         'prev_text' => '<i class="fa fa-chevron-left"></i> ' . __( 'Newer posts', 'grit' ),
	         'next_text' => __( 'Older posts', 'grit' ) . ' <i class="fa fa-chevron-right"></i>' ,
	         ) );
		   ?>
              
		   <?php wp_reset_postdata(); ?>
              
              
              
              
           <!-- <li >
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li >
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-right"></i></a></div>
            </li>-->
          </ul>
        </nav>
      </div>
      <!--blog page container--> 
      
      <!--aside-->
      <aside class="col-md-3 col-sm-5" > 
        
        <!--Search-->
        <section class="widget widget_search  wow fdeInUp">
          <h2 class="widget-title">Search here</h2>
             <?php get_search_form();?>
            
          <!--<form>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Email Address...">
              <span class="input-group-btn">
              <button  type="button"><i class="fa  fa-search"></i></button>
              </span></div>
          </form>-->
        </section>
        <!--/Search--> 
        
        <!--Recent Comments-->
        
          
          <?php get_sidebar(); ?> 
          
       
        
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</section>

<?php

get_footer();

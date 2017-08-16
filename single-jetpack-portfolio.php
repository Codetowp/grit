<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grit
 */

get_header(); ?>

 <?php
   if(have_posts()):		  
	  while ( have_posts() ) : the_post();	 
   ?>
   
<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(img/p-1.jpg);">
  <div class="content  wow fadeInUp">
    <div class="container "> 
      
      <!--breadcrumb--
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Wordpress</li>
        </ol>
        --/breadcrumb--> 
		<?php
			echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-type',
			sprintf(
			'<span class="portfolio-type-links"><span class="screen-reader-text">%1$s </span>',
			esc_html__( 'Project types: ', 'grit' )
			),
			esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
			'</span>'
			);
		?>
      <h1><?php the_title(); ?></h1>
      <!--  <header class="entry-header"><a href="#"> </a><span class="date-article">10 days ago</span> in <span class="byline"><span class="author vcard"><a href="#">WORDPRESS</a> ,<a href="#"> BLOG</a></span></span> </header>-->
      <ul class="tag-head">
		<?php
			echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-tag',
			sprintf(
			'<span class="portfolio-type-tags"><span class="screen-reader-text">%1$s </span>',
			esc_html__( 'Project tags: ', 'grit' )
			),
			esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
			'</span>'
			);
		?>
        <li><a href="#">Red</a></li>
        <li><a href="#">design</a></li>
      </ul>
    </div>
  </div>
</div>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row wow fadeInUp"> 
      <!--blog posts container-->
      <div class="col-md-12 page-block">
        <?php the_content(); ?>
        <!--footer tags-->
        
        <footer class="entry-footer entry-meta-bar">
          <div class="entry-meta"> <i class="fa fa-tags"></i> <span class="tag-links  clearfix"> <a href="#" rel="tag">wordpress</a> <a href="#" rel="tag">themes</a> </span> </div>
        </footer>
        <!--/footer tags--> 
        
      </div>
      <!--blog posts container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--/page body-->
   <?php 
      endwhile;
    endif;
   ?> 
<div class="page-share-block">
  <div class="container">
    <div class="row">
      <h4>Share on :</h4>
      
      <!--page-share-->
      <ul class="page-share">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
      
      <!--page-share--> 
      
    </div>
  </div>
</div>
<?php
//get_sidebar();
get_footer();

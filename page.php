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

<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(img/in-bg.jpg);">
  <div class="content wow fadeInUp">
    <div class="container">
      <h1><?php the_title();?></h1>
    </div>
  </div>
</div>

<!--page body-->
<div id="page-body">
    <div class="container">
        <div class="row  wow fadeInUp"> 
        <!--blog posts container-->
            <div class="col-md-12 page-block">                
				<?php if(have_posts()): while ( have_posts() ) : the_post(); ?> 
					<?php the_content();?>
                <?php endwhile;endif;?>                
            </div>
            <!--blog posts container-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php
get_footer();

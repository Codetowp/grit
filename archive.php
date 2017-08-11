<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">

  <?php
		if ( have_posts() ) : ?>

<div id="page-banner" style="background-image: url(<?php echo get_template_directory_uri()?>/img/in-bg.jpg);">
  <div class="content  wow fdeInUp">
    <div class="container ">
     <header class="page-header">
				<?php
					the_archive_title( '<h1 >', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
    </div>
  </div>
</div>
<div id="page-body">
  <div class="container">
    <div class="row  wow fdeInUp"> 
      <!--blog page container-->
      <div class="col-md-12 col-xs-12 page-block "   > 

		<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
          
        
        <!-- article-->
        <article class="col-md-3 col-sm-3 col-xs-12 eq-blocks" style="height: 300px;">
          <header class="entry-header"> 
              
            <?php
              if  ( get_the_post_thumbnail()!='')
              {
                 the_post_thumbnail('grit_category'); 
              }
              else
              {?>
                  <img src="<?php echo get_template_directory_uri()?>/img/04-screenshot.jpg"  alt="image 1" >
              <?php 
              }
              ?> 
              
              <a href="<?php the_permalink();?>">
                <h6><?php the_title(); ?></h6>
              </a> 
              <?php
               $args = array('orderby' => 'name','parent' => 0);
               $tags = get_tags( $args );
               if($tags!='')
               {
                 foreach ( $tags as $tag ) 
                 {
                    echo '<a href="' . get_category_link( $tag->term_id ) . '">' . $tag->name .','. '</a>';
                 }
                   
               }
              ?>
            </header>
        </article>
        <!--/ article --> 
        <?php endwhile;?>
    
        
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
          </ul>
        </nav>
      </div>
      <!--blog page container-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php endif;?>

    </main>
</div>

<?php
//get_sidebar();
get_footer();

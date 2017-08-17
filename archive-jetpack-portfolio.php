<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */

get_header(); ?>

	<!-- banner Page
    ==========================================-->


<div id="page-banner" style="background-image: url(<?php get_template_directory_uri(); ?>/img/in-bg.jpg);">
  <div class="content  wow fdeInUp">
    <div class="container ">
      <h1>Portfolio</h1>
    </div>
  </div>
</div>

<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row">
      <div class="works"> 
        <!--portfolio grid-->
        <ul class="grid">
            
        <?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
            
          <li class="wow fdeInUp">
            <figure>
                 <?php the_post_thumbnail();?>
                <!--<img src="<?php echo get_template_directory_uri(); ?>/img/01-screenshot.jpg" alt="Screenshot 01">-->
              <figcaption>
                <div class="caption-content  wow fdeInUp">
                  <h6><?php the_title(); ?></h6>
                  <hr>
                    <?php
			          echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-type',
			          sprintf(
			             '<a href="#">%1$s'
			                 ),
			             esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
			             '</a>'
			             );
		              ?>
                    
                  <ul class="work-more">
                    <li><a href="<?php the_permalink();?>" ><i class="fa fa-search"></i></a></li>
                    <li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
            
<?php  endwhile; endif;  wp_reset_postdata();?>   
         
        </ul>
        <!--/portfolio grid-->
        
        <div class="clearfix"></div>
        
        <!--/portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul>
            <?php the_posts_navigation( array(
					'prev_text'          => esc_html__( 'Older projects', 'grit' ),
					'next_text'          => esc_html__( 'Newer projects', 'grit' ),
					'screen_reader_text' => esc_html__( 'Projects navigation', 'grit' ),
				) ); ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<?php
//get_sidebar();
get_footer();

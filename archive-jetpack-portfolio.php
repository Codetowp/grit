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



<div id="page-banner" style="background-image: url(<?php //the_post_thumbnail_url( array(400, 160) ); ?>);">
  <div class="content wow fadeInUp">
    <div class="container ">
      <h1><?php the_archive_title(); ?> </h1>
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
		 <?php
			//if(have_posts()):		  
			//while ( have_posts() ) : the_post();
		 ?>
		 
		 <?php

			// The Query
			$the_query = new WP_Query( array('post_type' => 'jetpack-portfolio') );
			

			// The Loop
			if ( $the_query->have_posts() ) {
				echo '<ul>';
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					echo '<li>' . get_the_title() . '</li>';
					?>
					 <li class="wow fadeInUp">
            <figure> <?php echo the_post_thumbnail_url(); ?>
              <figcaption>
                <div class="caption-content  wow fadeInUp">
                  <h6>Codetowp branding</h6>
                  <hr>
				 
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
					<?php
				}
				echo '</ul>';
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
			} ?>
          <li class="wow fadeInUp">
            <figure> <?php echo the_post_thumbnail_url(); ?>
              <figcaption>
                <div class="caption-content  wow fadeInUp">
                  <h6>Codetowp branding</h6>
                  <hr>
				 
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
		     <?php 
		//endwhile;
		//endif;
   ?> 
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/02-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/06-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/05-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/06-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li class="wow fdeInUp">
            <figure> <img src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <hr>
                  <a href="#">Design</a>/ <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
        </ul>
        <!--/portfolio grid-->
        
        <div class="clearfix"></div>
        
        <!--/portfolio page nav-->
        <nav class="navigation posts-navigation  wow fadeInUp"  role="navigation">
          <ul>
            <li >
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i></a></div>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li >
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<?php
//get_sidebar();
get_footer();

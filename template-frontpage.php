<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name:front-page
 * @package grit
 */

get_header(); ?>


<!-- banner Page
    ==========================================-->
<?php
    $background_img   = esc_url( get_theme_mod( 'bck_ground_image' ) );   
    $background_img_static   = get_template_directory_uri()."/img/b-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<section id="home-banner" style="background-image: url(<?php echo $image; ?>);background-color:<?php  echo esc_attr(get_theme_mod( 'grit_header_background_color' ));?>; opacity: <?php echo esc_attr(get_theme_mod( 'grit_transparnt' ));?>">
    <div class="content">
        <div class="container"  data-wow-duration="1s"> 
            <span class="wow fadeIn" id="head">
                <?php echo  $grit_tagline=( get_theme_mod( 'grit_header_text' ) )?
                ( get_theme_mod( 'grit_header_text' ) ):'Dcrazed says'; ?>
            </span>
            <h1 class="wow fadeInUp" >
                <?php echo  $grit_tagline=( get_theme_mod( 'grit_header_description' ) )?
                ( get_theme_mod( 'grit_header_description' ) ):' We put true <span>focus</span> on our design <span>process</span>, the concept, prototypes and <span>design</span>.'; ?>
            </h1>
        </div>
    </div>
    <div class="arrow bounce"> <i class="fa fa-arrow-down fa-2x"></i> </div>
</section>

<!-- about us Page
    ==========================================-->
<section id="about-us-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h2>
            <?php echo  $grit_header=( get_theme_mod( 'grit_about_header' ) )?
            ( get_theme_mod( 'grit_about_header' ) ):'About us'; ?>
        </h2>
        <a href="#">
            <?php echo  $grit_header=( get_theme_mod( 'grit_about_button_text' ) )?
            ( get_theme_mod( 'grit_about_button_text' ) ):'Mission brief'; ?>
        </a>
        <p>
             <?php echo  $grit_header=( get_theme_mod( 'grit_about_description' ) )?
            ( get_theme_mod( 'grit_about_description' ) ):'Creating websites from the web Studio <span>"Ui Team"</span> as a tool for business starts with Analytics. Goals and the ways to achieve them are defined. The goal is to encourage visitors to use the service or to buy goods in your company instead of the competitor.'; ?>
        </p>
      </div>
      <!--/section-title-->
      
      <div class="clearfix"></div>
      <!--about features list-->
      <ul class="about-features wow fadeInUp">
         <?php  get_template_part( 'section-part/section', about );?>
      </ul>
      <!--/about features list--> 
      
    </div>
  </div>
</section>

<!-- contact us Page
    ==========================================-->
<section id="home-contact-block">
  <div class="container">
    <div class="row wow fadeInUp">
        <p>
            <?php echo  $grit_header=( get_theme_mod( 'grit_contact_header' ) )?
            ( get_theme_mod( 'grit_contact_header' ) ):'Increase leads, build a professional website and be awesome..';?>
        </p>
        <a href="<?php echo  $grit_header=( get_theme_mod( 'grit_contact_button_url' ) )?
            ( get_theme_mod( 'grit_contact_button_url' ) ):'www.burstfly.com';?>">
            
            <?php echo  $grit_header=( get_theme_mod( 'grit_contact_button_text' ) )?
            ( get_theme_mod( 'grit_contact_button_text' ) ):'Contact us';?>
        </a> </div>
  </div>
</section>

<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
        <!--section-title-->
        <div class="section-title text-center wow fadeInUp">
            <h2>
                <?php echo  $grit_header=( get_theme_mod( 'grit_work_header' ) )?
                ( get_theme_mod( 'grit_work_header' ) ):'Our work';?>
            </h2>
            <a href="<?php echo  esc_url( home_url( '/portfolio' ) ); ?>">
                
                <?php echo  $grit_BUTTON_header=( get_theme_mod( 'grit_work_button_text' ) )?
                ( get_theme_mod( 'grit_work_button_text' ) ):'go to portfolio';?>
            </a>
        </div>
        <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <?php 
                $posts_per_page_portfolio = get_theme_mod( 'grit_work_portfolio_count' );
                $args = array(
                    'post_type'      => 'jetpack-portfolio',
                    'posts_per_page' => $posts_per_page_portfolio,
                );
 
                $project_query = new WP_Query ( $args );
 
                if ( post_type_exists( 'jetpack-portfolio' ) && $project_query -> have_posts() ) :
 
                    while ( $project_query -> have_posts() ) : $project_query -> the_post();
 
           ?>
        
            
          <li>
            <figure>
                
                  <?php the_post_thumbnail();?>
                <!--<img src="<?php echo get_template_directory_uri(); ?>/img/02-screenshot.jpg" alt="Screenshot 01">-->
              <figcaption>
                <div class="caption-content">
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
                    <li><a href="<?php the_permalink();?>"><i class="fa fa-search"></i></a></li>
                    <li><a href="<?php the_permalink();?>"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
        <?php  endwhile; endif;  wp_reset_postdata();?>       
            
         </ul>
      </div>
    </div>
  </div>
</section>

<!-- the process block
    ==========================================-->

<section id="process-block">
    <div class="container">
        <div class="row"> 
            <!--section-title-->
            <div class="section-title text-center wow fadeInUp">
                <h2>
                    <?php echo  $grit_header=( get_theme_mod( 'grit_process_header' ) )?
                    ( get_theme_mod( 'grit_process_header' ) ):'The process';?>
                </h2>
            </div>
            <!--/section-title--> 
      <!--process tab-->
      <div> 
        <!--tab nav-->
          
          <?php  get_template_part( 'section-part/section', process );?>
          
          
      
        
      </div>
      <!--\process tab--> 
      
    </div>
  </div>
</section>

<!-- Company counter section
    ==========================================-->
<?php
    $background_img   = esc_url( get_theme_mod( 'grit_counter_bck_ground_image' ) );   
    $background_img_static   = get_template_directory_uri()."/img/07-screenshot.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<style>
    #company-counter:after{
      /*  background: <?php  echo esc_attr(get_theme_mod( 'grit_counter_background_color' ));?> ;
        opacity: <?php echo esc_attr(get_theme_mod( 'grit_counter_transparnt' ));?>*/
    
    }
</style>
<section id="company-counter" style="background-image:url(<?php echo $image; ?>); ">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 wow fadeInDown">
       <?php  get_template_part( 'section-part/section', counts );?>  
      </div>
    </div>
  </div>
</section>
<!-- /Company counter section --> 

<!-- Testimonials Section
    ==========================================-->
<section id="testimonials-block" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div id="testimonial" class="owl-carousel owl-theme">
            
             <?php 
                $posts_per_page_testimonial = get_theme_mod( 'grit_testimonial_post_count' );
                $args = array(
                    'post_type'      => 'jetpack-testimonial',
                    'posts_per_page' => $posts_per_page_testimonial,
                );
 
                $project_query = new WP_Query ( $args );
 
                if ( post_type_exists( 'jetpack-testimonial' ) && $project_query -> have_posts() ) :
 
                    while ( $project_query -> have_posts() ) : $project_query -> the_post();
 
           ?>
            
            
            
          <div class="item"> <?php the_post_thumbnail();?>
              <h5><?php the_excerpt();?></h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>
            
          <?php  endwhile; endif;  wp_reset_postdata();?>
            
            
          <!--<div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/team/02.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>
          <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/team/03.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- latest news block
    ==========================================-->

<section id="latest-news-block">
    <div class="container">
        <div class="row"> 
            <!--section-title-->
            <div class="section-title text-center wow fadeInUp">
                <h2>
                     <?php echo  $grit_header=( get_theme_mod( 'grit_latest_news_header' ) )?
                    ( get_theme_mod( 'grit_latest_news_header' ) ):'Latest news'; ?>
                </h2>
                    <a href="<?php echo  esc_url( home_url( '/blog' ) ); ?>">
                    
                    <?php echo  $grit_button_text=( get_theme_mod( 'grit_latest_news_button_text' ) )?
                    ( get_theme_mod( 'grit_latest_news_button_text' ) ):'See the blog'; ?>
                    
                </a>
            </div>
            <!--/section-title--> 

                <?php 
                    $count_blog = get_theme_mod( 'grit_blog_post_count' );
                    $query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog ) );

                if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();
 ?>
                    <article class="col-md-3 col-sm-6 col-xs-12">
                    <header class="entry-header">        
                    <?php
                        if  ( get_the_post_thumbnail()!='')
                        {
                            the_post_thumbnail('grit_latest_news'); 
                        }
                        else
                        {?>
                         <img src="<?php echo get_template_directory_uri()?>/img/04-screenshot.jpg"  alt="image 1" >
                    <?php }?>       
                    <a href="<?php the_permalink();?>">
                     <h6><?php the_title();?></h6>
                    </a>
                    <?php 
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
      echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ). '">'. esc_html( $categories[0]->name ) . '</a> ';
                        }?>
                     </header>
                    </article>


             <?php   endwhile;endif;?>

                <?php wp_reset_postdata(); ?>
           
    </div>
  </div>
</section>

<?php
get_footer();
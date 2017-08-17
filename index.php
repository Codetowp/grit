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
 *
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
<section id="home-banner" style="background-image: url(<?php echo $image; ?>);">
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
        <li><i class="fa fa-comment-o"></i>
          <h5>Brand strategy</h5>
          <p>A brand is a name, term, design, symbol or other feature that distinguishes</p>
        </li>
        <li><i class="fa fa-file-image-o"></i>
          <h5>Art direction</h5>
          <p>Art director is the title for a variety of similar  job functions in theater</p>
        </li>
        <li><i class="fa fa-birthday-cake"></i>
          <h5>Graphic design</h5>
          <p>Graphic design is the process of visual communication, and problem-solving</p>
        </li>
        <li><i class="fa fa-inbox"></i>
          <h5>Web Development</h5>
          <p>Web development is a broad term for the work involved in developing a web site </p>
        </li>
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
            <a href="#">go to portfolio</a>
        </div>
        <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/01-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
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
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/02-screenshot.jpg" alt="Screenshot 01">
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
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" alt="Screenshot 01">
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
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="Screenshot 01">
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
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="Screenshot 01">
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
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/img/06-screenshot.jpg" alt="Screenshot 01">
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
        <ul class="nav nav-tabs">
            <li class="active"><a href="#concept" data-toggle="tab"><i class="fa fa-star-o"></i>
                <h5>01. Concept</h5>
                </a>
            </li>
            <li><a href="#prototype" data-toggle="tab"><i class="fa fa-copy"></i>
                <h5>02. Prototyping</h5>
                </a>
            </li>
            <li><a href="#Design" data-toggle="tab"><i class="fa fa-laptop"></i>
                <h5>03. Design</h5>
                </a>
            </li>
            <li><a href="#development" data-toggle="tab"><i class="fa fa-code"></i>
                <h5>04. Development</h5>
                </a>
            </li>
        </ul>
        <!--/tab nav--> 
        <!--tab container-->
        <div class="tab-content"> 
          
          <!--tab nav item 1-->
          <div id="concept" class="tab-pane active"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="<?php echo get_template_directory_uri(); ?>/img/tab-1.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Professional website design</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content--> 
            
          </div>
          <!--/tab nav item 1--> 
          
          <!--tab nav item 2-->
          <div id="prototype" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Professional website design</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content--> 
            
          </div>
          <!--/tab nav item 2--> 
          
        </div>
        <!--/tab container--> 
        
      </div>
      <!--\process tab--> 
      
    </div>
  </div>
</section>

<!-- Company counter section
    ==========================================-->
<section id="company-counter" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/07-screenshot.jpg);">
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
          <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/team/01.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>
          <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/team/02.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>
          <div class="item"> <img src="<?php echo get_template_directory_uri(); ?>/img/team/03.jpg">
            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
            <p><strong>Dean Martin</strong> CEO Acme Inc.</p>
          </div>
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
                <a href="<?php echo  $grit_button_url=( get_theme_mod( 'grit_latest_news_button_url' ) )?
                    ( get_theme_mod( 'grit_latest_news_button_url' ) ):'www.burstfly.com'; ?>">
                    
                    <?php echo  $grit_button_text=( get_theme_mod( 'grit_latest_news_button_text' ) )?
                    ( get_theme_mod( 'grit_latest_news_button_text' ) ):'See the blog'; ?>
                    
                </a>
            </div>
            <!--/section-title--> 
            
            <!--home article-->
            <article class="col-md-3 col-sm-6 col-xs-12">
                <header class="entry-header"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/04-screenshot.jpg" alt="image 1"> 
                    <a href="#"><h6>10 Incredible Quotes To Guide Your Life</h6></a> 
                    <a href="#">Web-design</a> , <a href="#">Front-end</a>
                </header>
            </article>
            <!--/home article --> 
      
            <!--home article-->
            <article class="col-md-3 col-sm-6 col-xs-12">
                <header class="entry-header"> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/02-screenshot.jpg" alt="image 1"> 
                    <a href="#"><h6>Responsive Website in 2017 – Step by Step Guide</h6></a> 
                    <a href="#">Web-design</a> 
                </header>
            </article>
            <!--/home article --> 

      <!--home article-->
      <article class="col-md-3 col-sm-6 col-xs-12">
        <header class="entry-header"> <img src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" alt="image 1"> <a href="#">
          <h6>10 Incredible Quotes To Guide Your Life</h6>
          </a> <a href="#">Web-design</a> , <a href="#">Front-end</a> </header>
      </article>
      <!--/home article --> 
      
      <!--home article-->
      <article class="col-md-3 col-sm-6 col-xs-12">
        <header class="entry-header"> <img src="<?php echo get_template_directory_uri(); ?>/img/01-screenshot.jpg" alt="image 1"> <a href="#">
          <h6>HEADING 6 in use here</h6>
          </a> <a href="#">Web-design</a> </header>
      </article>
      <!--/home article --> 
      
    </div>
  </div>
</section>

<?php
get_footer();
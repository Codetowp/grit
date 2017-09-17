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

$disable1    = get_theme_mod( 'grit_header_check' ) == 1 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>

<?php
    $background_img   = esc_url( get_theme_mod( 'bck_ground_image' ) );   
    $background_img_static   = get_template_directory_uri()."/img/b-1.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<section id="home-banner" style="background-image: url(<?php echo $image; ?>);">
    <div class="content">
        <div class="container"  data-wow-duration="1s"> 
             <?php 
                $grit_header_text  = get_theme_mod( 'grit_header_page_text', esc_html__('Section Title', 'grit' ));
                if ($grit_header_text != '') echo '<span class="wow fadeIn" id="head">  ' . wp_kses_post($grit_header_text) . ' </span>'; 
             ?>
            
            <?php 
                $grit_header_description  = get_theme_mod( 'grit_header_description', esc_html__('Section Description', 'grit' ));
                if ($grit_header_description != '') echo '<h1 class="wow fadeInUp" >' . wp_kses_post($grit_header_description) . ' </h1>'; 
             ?>
            
            
        </div>
    </div>
    <div class="arrow bounce"> <i class="fa fa-arrow-down fa-2x"></i> </div>
</section>
<?php endif;?>
<!-- about us Page
    ==========================================-->

<?php

$disable1    = get_theme_mod( 'grit_about_check' ) == 1 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>

<section id="about-us-block">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
                 <?php 
                    $grit_about_header  = get_theme_mod( 'grit_about_header', esc_html__('About', 'grit' ));
                    if ($grit_about_header != '') echo '<h2>  ' . wp_kses_post($grit_about_header) . ' </h2>'; 
                 ?>
                <?php 
                    $grit_about_button_text  = get_theme_mod( 'grit_about_button_text', esc_html__('Read More', 'grit' ));
                     $grit_about_button_url= get_theme_mod( 'grit_about_button_url', esc_html__('#', 'dblogger') );
                
                    if ($grit_about_button_text != '' && $grit_about_button_url != '') echo '<a href="' . esc_url($grit_about_button_url) . '">  ' . wp_kses_post($grit_about_button_text) . ' </a>'; 
                 ?>
                 <?php 
                    $grit_about_description  = get_theme_mod( 'grit_about_description', esc_html__('Section Description', 'grit' ));
                    if ($grit_about_description != '') echo '<p>  ' . wp_kses_post($grit_about_description) . ' </p>'; 
                 ?>
               
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
<?php endif;?>
<!-- contact us Page
    ==========================================-->
<?php

$disable1    = get_theme_mod( 'grit_contact_check' ) == 1 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>

<section id="home-contact-block">
	<div class="container">
		<div class="row wow fadeInUp">
            
             <?php 
                    $grit_contact_header  = get_theme_mod( 'grit_contact_header', esc_html__('Section Title', 'grit' ));
                    if ($grit_contact_header != '') echo '<p>  ' . wp_kses_post($grit_contact_header) . ' </p>'; 
             ?>
            <?php 
                    $grit_contact_button_text  = get_theme_mod( 'grit_contact_button_text', esc_html__('Read More', 'grit' ));
                     $grit_contact_button_url= get_theme_mod( 'grit_contact_button_url', esc_html__('#', 'grit') );
                
                    if ($grit_contact_button_text != '' && $grit_contact_button_url != '') echo '<a href="' . esc_url($grit_contact_button_url) . '">  ' . wp_kses_post($grit_contact_button_text) . ' </a>'; 
                 ?>
		</div>
	</div>
</section>
<?php endif;?>
<!-- our works block
    ==========================================-->
<?php

$disable1    = get_theme_mod( 'grit_work_check' ) == 0 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>

<section id="our-work-block">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
                
                <?php 
                    $grit_work_header  = get_theme_mod( 'grit_work_header', esc_html__('Section Title', 'grit' ));
                    if ($grit_work_header != '') echo '<h2>  ' . wp_kses_post($grit_work_header) . ' </h2>'; 
                ?>
                
                
                <?php 
                    $grit_work_button_text  = get_theme_mod( 'grit_work_button_text', esc_html__('Read More', 'grit' ));
                    
                
                    if ($grit_contact_button_text != '') echo '<a href="' . esc_url( home_url( '/portfolio' ) ) . '">  ' . wp_kses_post($grit_work_button_text) . ' </a>'; 
                 ?>
                
				
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
										sprintf( '<a href="#">%1$s' ),
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
<?php endif;?>
<!-- the process block
    ==========================================-->
<?php

$disable1    = get_theme_mod( 'grit_process_check' ) == 1 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>

<section id="process-block">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
                <?php 
                    $grit_process_header = get_theme_mod( 'grit_process_header', esc_html__('Section Title', 'grit' ));
                    if ($grit_process_header != '') echo '<h2>  ' . wp_kses_post($grit_process_header) . ' </h2>'; 
                ?>
                
            </div>
			<!--/section-title--> 
			<!--process tab-->
			<div> 
			  <?php  get_template_part( 'section-part/section', process );?>
			</div>
			<!--\process tab--> 
		</div>
	</div>
</section>
<?php endif;?>
<!-- Company counter section
    ==========================================-->
<?php

$disable1    = get_theme_mod( 'grit_counter_check' ) == 1 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>


<?php
    $background_img   = esc_url( get_theme_mod( 'grit_counter_bck_ground_image' ) );   
    $background_img_static   = get_template_directory_uri()."/img/07-screenshot.jpg";
    $image = $background_img ? "$background_img" : "$background_img_static";      
?>
<section id="company-counter" style="background-image:url(<?php echo $image; ?>); ">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 wow fadeInDown">
				<?php  get_template_part( 'section-part/section', counts );?>  
			</div>
		</div>
	</div>
</section>
<?php endif;?>
<!-- /Company counter section --> 

<!-- Testimonials Section
    ==========================================-->
<?php

$disable1    = get_theme_mod( 'grit_testimonial_check' ) == 0 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>
<section id="testimonials-block" class="text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div id="testimonial" class="owl-carousel owl-theme">
					<?php 
						$posts_per_page_testimonial = get_theme_mod( 'grit_testimonial_count' );
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
						<p><strong><?php the_title();?></strong> <!--CEO Acme Inc.--></p>
					</div>
						<?php  endwhile; endif;  wp_reset_postdata();?>
				</div>
			</div>
		</div>
    </div>
</section>
<?php endif;?>
<!-- latest news block
    ==========================================-->
<?php

$disable1    = get_theme_mod( 'grit_latest_news_check' ) == 1 ? true : false ;

if ( grit_is_selective_refresh() ) {
    $disable1 = false;
}
if ( ! $disable1) : ?>
<section id="latest-news-block">
    <div class="container">
        <div class="row"> 
            <!--section-title-->
            <div class="section-title text-center wow fadeInUp">
                
                 <?php 
                    $grit_latest_news_header = get_theme_mod( 'grit_latest_news_header', esc_html__('Our Blog', 'grit' ));
                    if ($grit_latest_news_header != '') echo '<h2>  ' . wp_kses_post($grit_latest_news_header) . ' </h2>'; 
                ?>
                 <?php 
                    $grit_latest_news_button_text  = get_theme_mod( 'grit_latest_news_button_text', esc_html__('Read More', 'grit' ));
                    
                
                    if ($grit_latest_news_button_text != '') echo '<a href="' . esc_url( home_url( '/blog' ) ) . '">  ' . wp_kses_post($grit_latest_news_button_text) . ' </a>'; 
                 ?>
                
            </div>
            <!--/section-title--> 

			<?php 
				$count_blog = get_theme_mod( 'grit_blog_post_count' );
				$query_post = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' =>$count_blog ) );

				if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();
			?>
            <article class="col-md-3 col-sm-6 col-xs-12 eq-blocks">
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
<?php endif;?>
<?php
get_footer();
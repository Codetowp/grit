<?php
    $background_img   =  get_theme_mod( 'bck_ground_image' ,esc_url( get_template_directory_uri() . '/assets/img/b-1.jpg' )); 
?>
<section id="home-banner" style="background-image: url(<?php echo esc_url( $background_img ); ?>);">
    <div class="content">
        <div class="container"  data-wow-duration="1s"> 
             <?php 
                $grit_header_text  = get_theme_mod( 'grit_header_page_text', esc_html__( 'Section Title', 'grit' ));
                if ($grit_header_text != '') echo '<span class="wow fadeIn" id="head">  ' . wp_kses_post( $grit_header_text ) . ' </span>'; 
             ?>
            
            <?php 
                $grit_header_description  = get_theme_mod( 'grit_header_description', esc_html__( 'Section Description' , 'grit' ));
                if ($grit_header_description != '') echo '<h1 class="wow fadeInUp" >' . wp_kses_post( $grit_header_description ) . ' </h1>'; 
             ?>
            
            
        </div>
    </div>
    <div class="arrow bounce"> <i class="fa fa-arrow-down fa-2x"></i> </div>
</section>
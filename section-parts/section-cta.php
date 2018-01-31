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
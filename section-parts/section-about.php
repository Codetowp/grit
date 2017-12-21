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
				$grit_about_button_url= get_theme_mod( 'grit_about_button_url', esc_html__('#', 'grit') );
				
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
				<?php
				$page_ids = grit_get_section_about_data();
				?>
				<?php
				if ( ! empty( $page_ids ) ) {
					global $post;
					foreach ($page_ids as $settings ) {
						$post_id = $settings['content_page'];
						$post_id = apply_filters( 'wpml_object_id', $post_id, 'page', true );
						$post = get_post($post_id);
						setup_postdata($post);
						$settings['icon'] = trim($settings['icon']);
						if ( $settings['icon'] ) {
							$settings['icon'] = trim( $settings['icon'] );
			//Get/Set social icons
							if ( $settings['icon'] != '' && strpos($settings['icon'], 'fa') !== 0) {
								$settings['icon'] = 'fa-' . $settings['icon'];
							}
							
							$media = '<i class="fa '.esc_attr( $settings['icon'] ).' fa-5x"></i>';
						}   else{

							$media='';	
						}                                                  
						?>
						<li><?php echo $media; ?>
							<h5> <?php the_title(); ?></h5>
							<p>
								<?php 
								$excerpt = get_the_excerpt();
								$excerpt = substr( $excerpt , 0, 100); 
								echo esc_html( $excerpt );
								?>
							</p>
						</li>


						<?php
	} // end foreach
	wp_reset_postdata();
}
else
	{?>                
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
		<?php  }?>
	</ul>		<!--/about features list--> 
</div>
</div>
</section>
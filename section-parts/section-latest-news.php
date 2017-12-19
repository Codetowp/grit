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
                
			$count_blog = get_theme_mod( 'grit_blog_post_count', 4 );
			$query_post = new WP_Query( array( 'post_type' => 'post','post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page' =>$count_blog ) );

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
						<img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/04-screenshot.jpg"  alt="image 1" >
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
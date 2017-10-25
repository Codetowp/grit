<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 *Template Name: blog
 */

get_header(); ?>
<div id="page-banner" style="background-image: url(<?php header_image(); ?>);">
	<div class="content  wow fdeInUp">
		<div class="container ">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>
<div id="page-body">
	<div class="container">
		<div class="row  wow fdeInUp"> 
			<!--blog page container-->
			<div class="col-md-9 col-sm-7 col-xs-12 page-block "   > 
				<?php         
				$query_post = new WP_Query( array( 'post_type' => 'post',  ) );    
				if ($query_post->have_posts()) :
					while ($query_post->have_posts()) : $query_post->the_post();	      
						get_template_part( 'template-parts/content', get_post_format() );     
					endwhile; // End of the loop.
				endif;			
				?>

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
					  
						<?php wp_reset_postdata(); ?>
					</ul>
				</nav>
			</div>
			<!--blog page container--> 

			<!--aside-->
			<aside class="col-md-3 col-sm-5" > 
				<?php get_sidebar(); ?> 
			</aside>
			<!--aside-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>


<?php

get_footer();

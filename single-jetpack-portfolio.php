<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grit
 */

get_header(); ?>

 <?php
   if(have_posts()):		  
	  while ( have_posts() ) : the_post();	 
   ?>
   
<!-- banner Page
    ==========================================-->
<div id="page-banner" style="background-image: url(<?php the_post_thumbnail_url() ; ?>);">
	<div class="content  wow fadeInUp">
		<div class="container "> 
			<?php
				echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-type',
				sprintf( '<span>%1$s' ),
				esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
				'</span>'
				);
			?>
		    <h1><?php the_title(); ?></h1>
		 
			<ul class="tag-head">
				<?php
					echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-tag',
					sprintf(
					' <li><a href="#">%1$s</a>',
					esc_html__( 'Project tags: ', 'grit' )
					),
					esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
					'</li>'
					);
				?>
			</ul>
		</div>
	</div>
</div>

<!--page body-->

<div id="page-body">
	<div class="container">
		<div class="row wow fadeInUp"> 
			<!--blog posts container-->
			<div class="col-md-12 page-block">
				<?php the_content(); ?>
				
				<!--footer tags-->
				<footer class="entry-footer entry-meta-bar">
					<div class="entry-meta"> 
						<i class="fa fa-tags"></i> 
						<span class="tag-links  clearfix"> 
							<?php
							 echo get_the_term_list(get_the_ID(), 'jetpack-portfolio-tag',
							 sprintf('<a href="#">%1$s',
								esc_html__( 'Project tags: ', 'grit' )
							 ),
								esc_attr_x(' , ', 'Used between list items, there is a space after the comma.', 'grit' ),
							 ''
							 );
							?>
						</span> 
					</div>
				</footer>
				<!--/footer tags--> 
			</div>
			<!--blog posts container-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--/page body-->

<?php 
	endwhile;
	endif;
?> 
<div class="page-share-block">
	<div class="container">
		<div class="row">
			<h4>Share on :</h4>
			<!--page-share-->
			<ul class="page-share">
				<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Facebook!', 'cryst4l')?>"><i class="fa fa-facebook"></i></a></li>
				<li><a target="_blank" href="http://www.twitter.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Twitter!', 'cryst4l')?>"><i class="fa fa-twitter"></i></a></li>
				<li><a target="_blank" href="http://www.plus.google.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Google Plus!', 'cryst4l')?>"><i class="fa fa-google-plus"></i></a></li>
				<li><a target="_blank" href="http://www.pinterest.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Pinterest!', 'cryst4l')?>"><i class="fa fa-pinterest"></i></a></li>
				<li><a target="_blank" href="http://www.dribbble.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Dribbble!', 'cryst4l')?>"><i class="fa fa-dribbble"></i></a></li>
				<li><a target="_blank" href="http://www.linkein.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="<?php _e('Share this post on Linkein!', 'cryst4l')?>"><i class="fa fa-linkedin"></i></a></li>
			</ul>
			<!--page-share--> 
		</div>
	</div>
</div>
<?php
//get_sidebar();
get_footer();

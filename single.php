<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grit
 */

get_header(); ?>


<div id="Blog-post"> 
	<?php
	if(have_posts()):		  
		while ( have_posts() ) : the_post();
	?>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>				
	<?php endwhile;endif;?>
				<div class="clearfix"></div>
				<!--author box-->
				<div class="author-box"> <?php echo get_avatar( get_the_author_meta('user_email'), '100', 'grit' ); ?> 
					<div class="author-box-title"> <?php echo esc_html__( 'Authored By','grit');?> <?php the_author_link(); ?> </div>
                    <div class="author_social"> <a href="<?php echo esc_url( get_the_author_meta('url') ) ; ?>"><i class="fa fa-globe"></i></a></div>
					<div class="author-description"><?php the_author_meta('description'); ?></div>
					
				</div>
				<!--/author box-->
				<div class="clearfix"></div>
				<!--posts navigation-->
				<nav class="navigation posts-navigation"  role="navigation">                    
					<?php 	
						the_posts_pagination( array(
							'prev_text' => '<i class="pull-left"><div class="nav-previous"></div></i> ' . __( 'Newer posts', 'grit' ),
							'next_text' => __( 'Older posts', 'grit' ) . ' <i class="pull-right"><div   class="nav-next"></div></i>',
						) );
					?>
				</nav>
				<!--/posts navigation-->
				
				
                <?php wp_reset_postdata(); ?>
				<div class="clearfix"></div>
				<!--Also like-->
				<div class="also-like-block"> 
					 <?php grit_related_post(); ?>
				</div>
				<!--/Also like-->
								
				<!--comment-->
				<div id="comments" class="comments-area text-left">
					<!-- .comment-list -->
					<?php comments_template();?>					
				</div>
				<div class="clearfix"></div>
				<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'grit' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
				<!--/comment--> 
			</div>
			<!--blog posts container--> 
			<!--aside-->
			<aside class="col-md-3 col-sm-4" > 
				<?php get_sidebar(); ?> 
			</aside>
			<!--aside-->

			<div class="clearfix"></div>
		</div>
	</div>
</div>

<?php
//get_sidebar();
get_footer();

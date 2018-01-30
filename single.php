<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grit
 */

get_header(); ?>
	<!-- Article content starts here -->
	<div id="Blog-post"> 
		<?php if(have_posts()):	while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'single' ); ?>			
		<?php endwhile;endif;?>
					<div class="clearfix"></div>
					<!--author box-->
					<div class="author-box"><?php echo get_avatar( get_the_author_meta('ID'), '100', 'grit' ); ?> 
						<div class="author-box-title"><?php esc_html_e( 'By','grit');?><?php the_author_posts_link(); ?> </div>
						<div class="author_social"><a href="<?php echo esc_url( get_the_author_meta('url') ) ; ?>"><i class="fa fa-globe"></i></a></div>
						<div class="author-description"><?php the_author_meta('description'); ?></div>
					</div>
					<!--/author box-->
					<div class="clearfix"></div>
					<!--posts navigation-->
					<nav class="navigation posts-navigation" role="navigation">                    
						<?php 	
						the_posts_pagination( array(
							'prev_text' => '<i class="pull-left"><div class="nav-previous"></div></i> ' . __( 'Newer posts', 'grit' ),
							'next_text' => __( 'Older posts', 'grit' ) . ' <i class="pull-right"><div   class="nav-next"></div></i>',
						) );
						?>
					</nav>
					<!--/posts navigation-->
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'grit' ),
							'after'  => '</div>',
						) );
					?>
					<?php wp_reset_postdata(); ?>
					<div class="clearfix"></div>
					<!-- Related Posts -->
					<div class="also-like-block"> 
						<?php grit_related_post(); ?>
					</div>
					<!-- Comments -->
					<div id="comments" class="comments-area text-left">
						<?php comments_template();?>					
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- Sidebar -->
				<aside class="col-md-3 col-sm-12"> 
					<?php get_sidebar(); ?> 
				</aside>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<?php
get_footer();

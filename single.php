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
	<header class="entry-header" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
		<div class="content wow fadeInUp">
			<div class="container"> 
				<!--breadcrumb-->
				<ol class="breadcrumb">
				  <?php the_breadcrumb(); ?>
				</ol>
				<h1><?php the_title(); ?> </h1>
				<hr>
				<?php 
                
                 $disable    = get_theme_mod( 'grit_enable_disable_blog_auother_button' ) == 1 ? true : false ;

                    if ( grit_is_selective_refresh() ) {
                         $disable = false;
                        }
                    if ( ! $disable) : 
                            grit_posted_on();
                    endif;
                ?>
			</div>
		</div>
		<div class="arrow bounce"> <i class="fa fa-arrow-down fa-2x"></i> </div>
	</header>    
	<?php 
	endwhile;
	endif;
	?> 
	<div class="container">
		<div class="row wow fadeInUp"> 
			<!--blog posts container-->
			<div class="col-md-9 col-sm-8 single-post">
				<article class="post">
					<?php
						if(have_posts()):		  
						   while ( have_posts() ) : the_post();
					?>
						<?php echo the_content();?>
					<?php endwhile;endif;?>
				</article>
				<footer class="entry-footer entry-meta-bar">
					<div class="entry-meta"> 
						<i class="fa fa-tags"></i> 
						<span class="tag-links  clearfix"> 
							<?php grit_entry_footer(); ?>
						</span> 
					</div>
				</footer><!--/footer tags-->
				<div class="clearfix"></div>

				<!--author box-->
				<div class="author-box"> <?php echo get_avatar( get_the_author_meta('user_email'), '100', '' ); ?> 
					<div class="author-box-title"> Authored By <a href="#" rel="author"><?php the_author_link(); ?> </a> </div>
					<div class="author-description"><?php the_author_meta('description'); ?></div>
					<div class="author_social"> </div>
				</div>
				<!--/author box-->

				<div class="clearfix"></div>

				<!--posts navigation-->
				<nav class="navigation posts-navigation"  role="navigation">
                    
                      <?php 	
		                  the_posts_pagination( array(
	                           'prev_text' => '<i class="pull-left"><div class="nav-previous"></div></i> ' . __( 'Newer posts', 'grit' ),
                                'next_text' => __( 'Older posts', 'grit' ) . ' <i class="pull-right"><div class="nav-next"></div></i>' ,
                            ) );
		              ?>
                    <!--<ul>
						<!--<li class="pull-left">
							<div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i> Previous post</a></div>
						</li>
						<li class="pull-right">
							<div class="nav-next"><a href="http://localhost/wordpress/page/2/">Next post <i class="fa fa-chevron-right"></i></a></div>
						</li>
					</ul>-->
				</nav>
				<!--/posts navigation-->
                <?php wp_reset_postdata(); ?>
				<div class="clearfix"></div>
				
				<!--Also like-->
				<div class="also-like-block"> 
					 <?php grit_related_post(); ?>
				</div>
				<!--/Also like-->

				<div class="clearfix"></div>
				
				<!--comment-->
				<div id="comments" class="comments-area text-left">
					<!-- .comment-list -->
					<?php comments_template();?>
					
				</div>
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

<header class="entry-header" style="background-image: url(<?php echo  the_post_thumbnail_url('grit_single_product'); ?>);">
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

<div class="container">
	<div class="row wow fadeInUp"> 
		<!--blog posts container-->
		<div class="col-md-9 col-sm-12 single-post">
			<article class="post">
				<?php echo the_content();?>					
			</article>
			<footer class="entry-footer entry-meta-bar">
				<div class="entry-meta"> 
					<i class="fa fa-tags"></i> 
					<span class="tag-links  clearfix"> 
						<?php grit_entry_tag(); ?>
					</span> 
				</div>
			</footer><!--/footer tags--><?php grit_entry_edited();?>
<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package grit
 */
 
?>
<article class="col-md-3 col-sm-6 col-xs-12 eq-blocks">
	<header class="entry-header">
		<a href="<?php the_permalink();?>">
			<?php
			if  ( get_the_post_thumbnail()!='')
			{
				the_post_thumbnail('grit_post_preview'); 
			} else { ?>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default.jpg"  alt="" >
			<?php } ?>       
		</a> 
		<a href="<?php the_permalink();?>">
			<h6><?php the_title(); ?></h6>
		</a> 
		<?php grit_entry_category(); ?>
	</header>
</article>
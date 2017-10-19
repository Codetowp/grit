<!-- article-->
<article class="col-md-3 col-sm-3 col-xs-12 eq-blocks" style="height: 300px;">
	<header class="entry-header"> 
		<?php
		if  ( get_the_post_thumbnail()!='')
		{
			the_post_thumbnail('grit_category'); 
		}
		else
		{?>
			<img src="<?php echo get_template_directory_uri()?>/img/04-screenshot.jpg"  alt="image 1" >
		<?php 
		}
		?> 
		<a href="<?php the_permalink();?>">
		<h6><?php the_title(); ?></h6>
		</a> 
		<?php grit_entry_category(); ?>
	</header>
</article>
<!--/ article --> 
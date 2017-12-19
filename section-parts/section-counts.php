<?php
    $background_img   =  get_theme_mod( 'grit_counter_bck_ground_image', esc_url( get_template_directory_uri() . '/assets/img/07-screenshot.jpg' ));   
    //$background_img_static   = get_template_directory_uri() .'/assets/assets/img/07-screenshot.jpg';
   // $image = $background_img ? "$background_img" : "";      
?>
<section id="company-counter" style="background-image:url(<?php echo esc_url( $background_img ); ?>); ">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12 wow fadeInDown">
<?php
$user_ids = grit_get_section_counter_data();
?>
<?php
if ( ! empty( $user_ids ) ) {
	$col = 3;
	$num_col = 4;
	$n = count( $user_ids );
	if ( $n <= 4 ) {
		switch ($n) {
			case 3:
			$col = 4;
			$num_col = 3;
			break;
			case 2:
			$col = 6;
			$num_col = 2;
			break;
			default:
			$col = 12;
			$num_col = 1;
		}
	}
	$j = 0;
	foreach ( $user_ids as $k => $f ) {
		$class = 'col-md-3 col-sm-3 col-xs-' . $col;
		if ($j >= $num_col) {
			$j = 1;
			$class .= ' clearleft';
		} else {
			$j++;
		}
		$media = '';
		$f =  wp_parse_args( $f, array(
		'icon_type' => 'icon',
		'icon' => 'gg',
		'image' => '',
		'title' => '',
		'count' => '',
		) );
		if ( $f['icon_type'] == 'image' && $f['image'] ){
			$url1 = grit_get_media_url( $f['image'] );

			if($url1 != '')
			{   
				$url=grit_get_media_url( $f['image'] );
			}
			else
			{
				$url     = get_template_directory_uri()."/assets/img/bq-bg.jpg";
			}

			if ( $url ) {
				$media = '<img src="'.esc_url( $url ).'" class="img-responsive d-block m-x-auto" style="width:112px">';
			}
		} else if ( $f['icon'] ) {
			$f['icon'] = trim( $f['icon'] );
			$classs = esc_attr( $f['icon'] );
		}              
		?>

			<div class="<?php echo esc_attr($class); ?>">
				<div class="c-block"> 
					<?php  if($f['icon'] ){?>
						<i class="<?php echo $classs; ?>" style="font-size:65px;padding-top:33px"></i> 
						<!-- <i class="fa fa-heart-o"></i> -->
					<?php }else{ echo $media;  }?>
					<span class="counter"><?php echo esc_html( $f['count'] ); ?></span>
					<p><?php echo esc_html($f['title']); ?></p>
				</div>
			</div>
	<?php
	} // end foreach
}
else{
?>                
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="c-block"><i class="fa fa-heart-o"></i><span class="counter">17</span>
			<p>Clients</p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="c-block"><i class="fa fa-envelope-o"></i><span class="counter">456</span>
			<p>Leads</p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="c-block"><i class="fa fa-folder-o"></i><span class="counter">8596</span>
			<p>Websites</p>
		</div>
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
		<div class="c-block"><i class="fa fa-coffee"></i><span class="counter">456</span>
			<p>Coffee</p>
		</div>
	</div>
<?php  }?>
</div>
		</div>
	</div>
</section>

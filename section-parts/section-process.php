<section id="process-block">
	<div class="container">
		<div class="row"> 
			<!--section-title-->
			<div class="section-title text-center wow fadeInUp">
				<?php 
				$grit_process_header = get_theme_mod( 'grit_process_header', __('Section Title', 'grit' ));
				if ($grit_process_header != '') echo '<h2>  ' . wp_kses_post($grit_process_header) . ' </h2>'; 
				?>
				
			</div>
			<!--/section-title--> 
			<!--process tab-->
			<div>
				<?php
				$page_ids = grit_get_section_process();
				?>
				<?php
				if ( ! empty( $page_ids ) ) {
					$col = 3;
					$num_col = 4;
					$n = count( $page_ids );
					if ($n < 4) {
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
				?>
				<ul class="nav nav-tabs">
					<?php  
					global $post;   
					$firstClass = 'active'; 
					foreach ($page_ids as $post_id => $settings  ) {
						if ( $settings['icon'] ) {
							$settings['icon'] = trim( $settings['icon'] );
							$class = esc_attr( $settings['icon'] );
						}   
						else{

							$class ='';
						} 
						?>
						<li class="<?php echo esc_html($firstClass);?>"><a href="#<?php echo esc_html($settings['title']);?>" data-toggle="tab"><i class="<?php echo esc_html($class);?>"></i>
							<h5><?php echo esc_html($settings['title']);?></h5>
						</a>
					</li>  
					<?php $firstClass = ''; }
                     wp_reset_postdata();
					 ?>     
				</ul>
					<!--/tab nav--> 
				<div class="tab-content"> 
					<?php
					$firstClass = 'active'; 
					foreach ($page_ids as $post_id => $settings  ) {
						$post_id = $settings['content_page'];
						?>
						<div id="<?php echo esc_html( $settings['title']);?>" class="tab-pane <?php echo esc_html($firstClass);?>"> 
							<!--tab img-->
							<div class="col-md-5 process-img"><?php  echo get_the_post_thumbnail( $post_id, 'grit_process-default' ); ?></div>
							<!--/tab img--> 
							<!--tab content-->
							<div class="col-md-7 process-content">
								<h6> <?php echo esc_html( get_the_title($post_id) ); ?></h6>
								<p>
									<?php
									$content = get_post_field('post_content', $post_id); 
									echo wp_kses_post(mb_strimwidth($content, 0, 500, '...'));
									
										
                                    ?>

									</p>
									<a href="<?php echo esc_url( get_permalink($post_id) ); ?>"><?php esc_html_e('Read More','grit'); ?></a> </div>
									<!--/tab content--> 
								</div>
								<?php
								$firstClass = ''; 
					} // end foreach
					wp_reset_postdata();
					?>
				</div>
				<?php } else {?>                
				<ul class="nav nav-tabs">
					<li class="active"><a href="#concept" data-toggle="tab"><i class="fa fa-star-o"></i>
						<h5>01. Concept</h5>
					</a>
					</li>
					<li><a href="#prototype" data-toggle="tab"><i class="fa fa-copy"></i>
						<h5>02. Prototyping</h5>
					</a>
					</li>
					<li><a href="#Design" data-toggle="tab"><i class="fa fa-laptop"></i>
						<h5>03. Design</h5>
					</a>
					</li>
					<li><a href="#development" data-toggle="tab"><i class="fa fa-code"></i>
						<h5>04. Development</h5>
					</a>
					</li>
				</ul>
				<!--Demo tab container-->
				<div class="tab-content"> 
					<div id="concept" class="tab-pane active"> 
						<div class="col-md-5 process-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/tab-1.jpg" class="img-responsive"> </div>
						<div class="col-md-7 process-content">
							<h6>Professional website design</h6>
							<p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
							<a href="#">Read More</a> 
						</div>
					</div>
					<div id="prototype" class="tab-pane"> 
						<div class="col-md-5 process-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/03-screenshot.jpg" class="img-responsive"> </div>
						<div class="col-md-7 process-content">
							<h6>Professional website design</h6>
							<p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
							<a href="#">Read More</a> 
						</div>
					</div>
					<div id="prototype" class="tab-pane"> 
						<div class="col-md-5 process-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/03-screenshot.jpg" class="img-responsive"> </div>
						<div class="col-md-7 process-content">
							<h6>Apes and spider monkeys </h6>
							<p>website design most monkeys do not. They just run and jump from branch to branch.</p>
							<a href="#">Read More</a> 
						</div>
					</div>
					<div id="prototype" class="tab-pane"> 
						<div class="col-md-5 process-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/03-screenshot.jpg" class="img-responsive"> </div>
						<div class="col-md-7 process-content">
							<h6>Professional website design</h6>
							<p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
							<a href="#">Read More</a> 
						</div>
					</div>
				</div>
				<?php  }?>
			</div>
		</div>
	</div>
</section>


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
                        global $post;   
        
        
        ?>


        <ul class="nav nav-tabs">
            
        <?php  
        
         $firstClass = 'active'; 
        foreach ($page_ids as $post_id => $settings  ) {
            
              
                if ( $settings['icon'] ) {
                        $settings['icon'] = trim( $settings['icon'] );
                        $class = esc_attr( $settings['icon'] );
                    }    
            
            ?>
              
            <li class="<?php echo $firstClass;?>"><a href="#<?php echo $settings['title']?>" data-toggle="tab"><i class="<?php echo $class;?>"></i>
                <h5><?php echo $settings['title']?></h5>
                </a>
            </li>  
            
        <?php $firstClass=''; } ?>        
          
        </ul>
        <!--/tab nav--> 
        <div class="tab-content"> 
        
        <?php
        $firstClass = 'active'; 
               foreach ($page_ids as $post_id => $settings  ) {
                   
                    
                   
                   $post_id = $settings['content_page'];
                            $post_id = apply_filters( 'wpml_object_id', $post_id, 'page', true );
                            $post = get_post( $post_id );
                            setup_postdata( $post );
                            
                        
        ?>

        <div id="<?php echo $settings['title']?>" class="tab-pane <?php echo $firstClass;?>"> 
            <!--tab img-->
            <div class="col-md-5 process-img">  <?php the_post_thumbnail('process-medium');?> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6><?php the_title(); ?></h6>
                <p>
                <?php 
                    $excerpt = get_the_excerpt();
                    $excerpt = substr( $excerpt , 0, 500); 
                   // echo $excerpt;
                    echo the_content();
                    ?></p>
              <a href="<?php get_permalink($post); ?>">Read More</a> </div>
            <!--/tab content--> 
            
         </div>
            
       <?php
        $firstClass = ''; 
      } // end foreach
       
        wp_reset_postdata();
        
        ?>
</div>
<?php 
}
else
{?>                



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
        <!--/tab nav--> 
        <!--tab container-->
        <div class="tab-content"> 
          
          <!--tab nav item 1-->
          <div id="concept" class="tab-pane active"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="<?php echo get_template_directory_uri(); ?>/img/tab-1.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Professional website design</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content--> 
            
          </div>
          <!--/tab nav item 1--> 
          
          <!--tab nav item 2-->
          <div id="prototype" class="tab-pane"> 
            <!--tab img-->
            <div class="col-md-5 process-img"> <img src="<?php echo get_template_directory_uri(); ?>/img/03-screenshot.jpg" class="img-responsive"> </div>
            <!--/tab img--> 
            <!--tab content-->
            <div class="col-md-7 process-content">
              <h6>Professional website design</h6>
              <p>Apes and spider monkeys move theirbody from branch to branch by swaying hands, but most monkeys do not. They just run and jump from branch to branch.</p>
              <a href="#">Read More</a> </div>
            <!--/tab content--> 
            
          </div>
          <!--/tab nav item 2--> 
          
        </div>
        <!--/tab container--> 
                
<?php  }?>


<?php
 $page_ids = grit_get_section_about_data();

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
               foreach ($page_ids as $post_id => $settings  ) {
                   $post_id = $settings['content_page'];
                            $post_id = apply_filters( 'wpml_object_id', $post_id, 'page', true );
                            $post = get_post( $post_id );
                            setup_postdata( $post );
                                 
                                 
                    if ( $settings['icon'] ) {
                        $settings['icon'] = trim( $settings['icon'] );
                        $class = esc_attr( $settings['icon'] );
                    }              
                          
                        
        ?>
        <li><i class="<?php echo $class?>"></i>
          <h5> <?php the_title(); ?></h5>
          <?php 
                    $excerpt = get_the_excerpt();
                    $excerpt = substr( $excerpt , 0, 100); 
                    echo $excerpt;
            ?>
        </li>


       <?php
 
      } // end foreach
        wp_reset_postdata();
}
else
{?>                
        <li><i class="fa fa-comment-o"></i>
          <h5>Brand strategy</h5>
          <p>A brand is a name, term, design, symbol or other feature that distinguishes</p>
        </li>
          
        <li><i class="fa fa-file-image-o"></i>
          <h5>Art direction</h5>
          <p>Art director is the title for a variety of similar  job functions in theater</p>
        </li>
        <li><i class="fa fa-birthday-cake"></i>
          <h5>Graphic design</h5>
          <p>Graphic design is the process of visual communication, and problem-solving</p>
        </li>
        <li><i class="fa fa-inbox"></i>
          <h5>Web Development</h5>
          <p>Web development is a broad term for the work involved in developing a web site </p>
        </li>
                
<?php  }?>

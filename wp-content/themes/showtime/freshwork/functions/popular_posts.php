<?php
////////////////////////////////////////////////////////////////////////////////
// POPULAR BLOG POSTS FUNCTION
////////////////////////////////////////////////////////////////////////////////
function popularPosts() {
  global $wpdb;
  $limit = get_option('st_blogpost_popular_count');
  $table_name = $wpdb->prefix.'posts'; 
  $result = mysql_query("SELECT * FROM $table_name WHERE post_status = 'publish' AND post_type='post' ORDER BY comment_count DESC LIMIT $limit");
  ?>
    <div id="rp_posts_popular_wrapper">
                    <h3><?php echo get_option('st_translate_popular'); ?></h3>
                    <ul id="rp_posts_popular">

               
  <?php
  while($row = mysql_fetch_array($result))
  {
    
      //$popular_query = new WP_Query();
	    //$popular_query->query('p='.$row['ID']);
	    
	   // if ($popular_query->have_posts()):
    	
    	//while ($popular_query->have_posts()) : $popular_query->the_post();
    	 $popular_post = get_post($row['ID']);
    //	    echo $row['ID'].$popular_post->ID;
          $attachment_args = array(
               'post_type' => 'attachment',
               'numberposts' => 1,          // one attachement image per post
               'post_status' => null,
               'post_parent' =>$row['ID'],
               'orderby' => 'menu_order ID'
          );  
          $attachments = get_posts($attachment_args);
          $attachement_img = wp_get_attachment_url( $attachments[0]->ID);
         
          echo '<li>';
         // echo 'sdsdsd';
            if($attachement_img == '') $attachement_img = get_bloginfo('template_url').'/gfx/rp_thumb_blank.png'; 
            
            {  echo '<a href="'; echo get_permalink($popular_post->ID); echo'">'; echo '<img class="rp_thumb" src="'.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$attachement_img.'&amp;w=60&amp;h=60&amp;zc=1" alt="';  echo $popular_post->post_title; echo '" />';   echo '</a>'; }
            echo '<a href="'; echo get_permalink($popular_post->ID); echo'" class="rp_title">'; echo $popular_post->post_title; echo '</a>';
			echo '<br />'; echo '<span class="rp_date">';  echo date(get_option('st_translate_date'),strtotime($popular_post->post_date)); echo '</span>';
          echo '</li>';

    //	endwhile;
    	//else:
    //	echo 'No popular posts';
    	//endif;

  }

                            ?>
  </ul><!-- END "ul#rp_popular" -->
  </div><!-- END "div#rp_posts_popular_wrapper" -->                            
                            <?php
}
?>

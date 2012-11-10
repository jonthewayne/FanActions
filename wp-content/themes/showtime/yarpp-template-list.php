<?php /*
List template
This template returns the related posts as a comma-separated list.
Author: mitcho (Michael Yoshitaka Erlewine)
*/ 
?>

            	<div id="rp_posts_related_wrapper">
                    <h3><?php echo get_option('st_translate_related'); ?></h3>
                    <ul id="rp_posts_related">

<?php if ($related_query->have_posts()):
//	$postsArray = array();
	$post_limiter = get_option('st_blogpost_popular_count');
	$post_counter = 1;
	while ($related_query->have_posts()) : $related_query->the_post();

    
    $attachment_args = array(
         'post_type' => 'attachment',
         'numberposts' => 1,          // one attachement image per post
         'post_status' => null,
         'post_parent' =>$post->ID,
          'orderby' => 'menu_order ID'
    );
    $attachments = get_posts($attachment_args);
    $attachement_img = wp_get_attachment_url( $attachments[0]->ID);
   
    echo '<li>';
       if($attachement_img == '') $attachement_img = get_bloginfo('template_url').'/gfx/rp_thumb_blank.png'; 
       {  echo '<a href="'; the_permalink(); echo'">'; echo '<img class="rp_thumb" src="'.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$attachement_img.'&amp;w=60&amp;h=60&amp;zc=1" alt="'; the_title(); echo '" />';   echo '</a>'; }
      echo '<a href="'; the_permalink(); echo'" class="rp_title">'; the_title(); echo '</a>';
	  echo '<br />'; echo '<span class="rp_date">'; the_time(get_option('st_translate_date')); echo '</span>';
    echo '</li>';


    $post_counter++;
    if($post_counter > $post_limiter) break;	
		//$postsArray[] = '<a href="'.get_permalink().'" rel="bookmark">'.get_the_title().'</a><!-- ('.get_the_score().')-->';
	endwhile;
	
//echo implode(', '."\n",$postsArray); // print out a list of the related items, separated by commas

else:?>

<p>No related posts.</p>
<?php endif; ?>
  </ul><!-- END "ul#rp_related" -->

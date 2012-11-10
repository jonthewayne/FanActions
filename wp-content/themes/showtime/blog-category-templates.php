<div id="page" class="page_template_blog">

<?php
////////////////////////////////////////////////////////////////////////////////
// POST START
////////////////////////////////////////////////////////////////////////////////
$img_height = get_option('st_blogpost_fixedimg_height');
if($img_height != '') $img_height = '&amp;h='.$img_height;
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
// >>>>>>>>>> BLOG POST >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
?>
<?php     
    
    $attachment_args = array(
         'post_type' => 'attachment',
         'numberposts' => 1,          // one attachement image per post
         'post_status' => null,
         'post_parent' =>$post->ID,
               'orderby' => 'menu_order ID'
    );
    $attachments = get_posts($attachment_args);
    $attachement_img = wp_get_attachment_url( $attachments[0]->ID);

    $pretty_photo_url = $attachement_img;
    if(get_post_meta($post->ID, 'video_code', true) != "") $pretty_photo_url = get_post_meta($post->ID, 'video_code', true); 

?>

        	<div class="entry" id="post-<?php the_ID();?>">
            	 <h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="post_data">
                 	<?php if(get_option('st_blogpost_date') == 'true'){ ?><span class="post_date"><?php the_time(get_option('st_translate_date')); ?></span><?php } ?>
                  <?php if(get_option('st_blogpost_author') == 'true'){ ?>  <span class="post_author"> <?php the_author_posts_link(); ?></span><?php } ?>
                  <?php if(get_option('st_blogpost_tags') == 'true' && has_tag()){ ?>
                    <span class="post_tags">
                        <?php the_tags('', ', ', ''); ?>
                    </span>
                  <?php } ?> 
                  <?php if(get_option('st_blogpost_categories') == 'true' && get_post_type( $post ) != 'page'){ ?>
                  <span class="post_categories">
                       <?php the_category(','); ?>
                  </span>
                  <?php } ?>   
                  <?php if(get_option('st_blogpost_comments') == 'true'){ ?> 
                    <span class="post_comments"><?php comments_popup_link(st_option('st_com2_no'),st_option('st_com2_1'), st_option('st_com2_more'), 'comment_counter'); ?></span>
                  <?php } ?>
                 </div><!-- END "div.post_data" -->
                   <?php if( $pretty_photo_url != ""){?>
                 <p>
                      <?php 
                        if($pretty_photo_url == $attachement_img) $img_class = 'icon_zoom';//echo '<span class="icon_zoom"></span>';
                        else $img_class = 'icon_play';//echo '<span class="icon_play"></span>';
                        $lightbox = 'rel="prettyPhoto[Gallery]"';
                        if(get_option('st_blogpost_lightbox') == 'false') {$lightbox = ''; $pretty_photo_url =  get_permalink($post->ID); };
                      ?>
                   <a title="<?php the_title(); ?>" <?php echo $lightbox; ?> href="<?php echo $pretty_photo_url; ?>" class="portfolio_link <?php echo $img_class;?>">
                      <img src="<?php echo get_bloginfo('template_url');?>/scripts/timthumb.php?src=<?php echo $attachement_img; ?>&amp;w=572<?php echo $img_height;?>&amp;zc=1" class="img_border" alt=""/>
                  </a>
                 </p>
                 <?php } ?>
                  <?php 
                  if(!empty($post->post_excerpt)) {
                    the_excerpt();
                    echo '<a href="'. get_permalink($post->ID) . '" class="more-link">'.get_option('st_translate_readmore').'</a>';
                    }
                    else
                    {
                      the_content(get_option('st_translate_readmore')); 
                    }?>
              </div><!-- END "div.entry" -->    
<?php 
// <<<<<<<<<< BLOG POST <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

endwhile;
endif; 

  if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
        </div><!-- END "div#page" -->
       
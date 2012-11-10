<div id="page" class="page_template_portfolio">
<?php
$cat_id = $wp_query->get('cat');
$category_template = get_option($cat_id.'-cat_template');

if($category_template == '' || $category_template == 'portfolio')
{
?>

<div id="portfolio">
<?php
////////////////////////////////////////////////////////////////////////////////
// PORTFOLIO 1 ( 1 COLUMN )
////////////////////////////////////////////////////////////////////////////////
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
    // we have to prepare attachement images
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


  <div class="portfolio_item">
          <?php 
            $img_height = get_option('st_portfolio_img');
            if($img_height != '') $img_height = '&amp;'.$img_height;
                        if($pretty_photo_url == $attachement_img) $img_class = 'icon_zoom';//echo '<span class="icon_zoom"></span>';
                        else $img_class = 'icon_play';//echo '<span class="icon_play"></span>';
                        $lightbox = 'rel="prettyPhoto[Gallery]"';
                        if(get_option('st_portfolio_lightbox') == 'false') {$lightbox = ''; $pretty_photo_url =  get_permalink($post->ID); };
                      ?>
                 <?php if( $pretty_photo_url != ""){?>
                   <a title="<?php the_title(); ?>" <?php echo $lightbox; ?> href="<?php echo $pretty_photo_url; ?>" class="portfolio_link <?php echo $img_class;?>">
                      <img src="<?php echo get_bloginfo('template_url');?>/scripts/timthumb.php?src=<?php echo $attachement_img; ?>&amp;w=340<?php echo $img_height;?>&amp;zc=1" class="img_border" alt=""/>
                  </a>
                 <?php } ?>
    <div class="portfolio_desc">
    	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

        	<?php the_content('',FALSE,''); ?>
      		<?php
              if(get_post_meta($post->ID, 'read_more', true) != "false")
              { ?>
              	<a href="<?php the_permalink(); ?>" class="btn_a"><?php echo st_option('st_translate_readmore_portfolio'); ?></a>
              <?php
               }
         		?>
    
    </div>
</div><!-- END "div.portfolio_item" -->
<?php 


endwhile; endif; 
   if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
  </div><!-- END "div#portfolio" --> 
<?php } 
////////////////////////////////////////////////////////////////////////////////
// PORTFOLIO 2 ( 2 COLUMNS )
////////////////////////////////////////////////////////////////////////////////
else if($category_template == 'portfolio2')
{
?>
<div id="portfolio2">
<?php
$row = 0;
$post_count = 0;
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
  $post_count ++;
 if($row==0) echo '<div class="row">';
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
        <div class="portfolio_item">
                      <?php 
                        $img_height = get_option('st_portfolio_img2');
                        if($img_height != '') $img_height = '&amp;h='.$img_height;                        
                        if($pretty_photo_url == $attachement_img) $img_class = 'icon_zoom';//echo '<span class="icon_zoom"></span>';
                        else $img_class = 'icon_play';//echo '<span class="icon_play"></span>';
                        $lightbox = 'rel="prettyPhoto[Gallery]"';
                        if(get_option('st_portfolio_lightbox') == 'false') {$lightbox = ''; $pretty_photo_url =  get_permalink($post->ID); };
                      ?>
                 <?php if( $pretty_photo_url != ""){?>
                   <a title="<?php the_title(); ?>" <?php echo $lightbox; ?> href="<?php echo $pretty_photo_url; ?>" class="portfolio_link <?php echo $img_class;?>">
                      <img src="<?php echo get_bloginfo('template_url');?>/scripts/timthumb.php?src=<?php echo $attachement_img; ?>&amp;w=259<?php echo $img_height;?>&amp;zc=1" class="img_border" alt=""/>
                  </a>
                  <?php }?>
            <div class="portfolio_desc">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

        	<?php the_content('',FALSE,''); ?>
      		<?php
              if(get_post_meta($post->ID, 'read_more', true) != "false")
              { ?>
              	<a href="<?php the_permalink(); ?>" class="btn_a"><?php echo st_option('st_translate_readmore_portfolio'); ?></a>
              <?php
               }
         		?>

            </div><!-- END "div.portfolio_desc" -->
        </div><!-- END "div.portfolio_item" -->
    <?php if($row==1 || $post_count == $wp_query->post_count) echo '</div><!-- END "div.row" -->'; 
    $row = ($row -1 ) * ($row - 1);
    ?>

<?php
endwhile; endif;   
   if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
  </div><!-- END "div#portfolio2" -->    
<?php
 }
 
////////////////////////////////////////////////////////////////////////////////
// PORTFOLIO 3 ( 3 COLUMNS )
////////////////////////////////////////////////////////////////////////////////
 else if($category_template == 'portfolio3')
{
?>
<div id="portfolio3">
<?php
$row = 0;
$post_count = 0;
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
  $post_count ++;
 if($row==0) echo '<div class="row">';
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
        <div class="portfolio_item">
                      <?php
                         $img_height = get_option('st_portfolio_img3');
                          if($img_height != '') $img_height = '&amp;h='.$img_height; 
                        if($pretty_photo_url == $attachement_img) $img_class = 'icon_zoom';//echo '<span class="icon_zoom"></span>';
                        else $img_class = 'icon_play';//echo '<span class="icon_play"></span>';
                        $lightbox = 'rel="prettyPhoto[Gallery]"';
                        if(get_option('st_portfolio_lightbox') == 'false') {$lightbox = ''; $pretty_photo_url =  get_permalink($post->ID); };
                      ?>
                 <?php if( $pretty_photo_url != ""){?>
                   <a title="<?php the_title(); ?>" <?php echo $lightbox; ?> href="<?php echo $pretty_photo_url; ?>" class="portfolio_link <?php echo $img_class;?>">
                      <img src="<?php echo get_bloginfo('template_url');?>/scripts/timthumb.php?src=<?php echo $attachement_img; ?>&amp;w=165<?php echo $img_height;?>&amp;zc=1" class="img_border" alt=""/>
                  </a>
                  <?php } ?>
            <div class="portfolio_desc">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

              	<?php the_content('',FALSE,''); ?>
            		<?php
                    if(get_post_meta($post->ID, 'read_more', true) != "false")
                    { ?>
                    	<a href="<?php the_permalink(); ?>" class="btn_a"><?php echo st_option('st_translate_readmore_portfolio'); ?></a>
                    <?php
                     }
               		?>

            </div><!-- END "div.portfolio_desc" -->
        </div><!-- END "div.portfolio_item" -->
    <?php if($row==2 || $post_count == $wp_query->post_count) echo '</div><!-- END "div.row" -->'; 
    $row ++;
    if($row == 3)$row=0;
    ?>

<?php
endwhile; endif;
   if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
  </div><!-- END "div#portfolio2" -->    
<?php
 }?>
     

</div><!-- END "div#page" -->       
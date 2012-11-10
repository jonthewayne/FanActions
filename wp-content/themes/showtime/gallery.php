<?php
 /*
Template Name: Gallery
*/ ?>
<?php
 get_header();
?>
<?php 
////////////////////////////////////////////////////////////////////////////////
// INTRO (category info)
////////////////////////////////////////////////////////////////////////////////
?>
<div id="intro_wrapper">
    <div class="intro_page">
    <h2><?php            
         echo $post->post_title;
    ?></h2>
    <div class="page_meta_box"><?php echo get_post_meta($post->ID, 'Description', true);   ?></div>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<?php 
////////////////////////////////////////////////////////////////////////////////
// END INTRO
////////////////////////////////////////////////////////////////////////////////
?>

<?php 
////////////////////////////////////////////////////////////////////////////////
// CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>
<div id="content_wrapper">
 <div class="content_shadow_right">
	<div id="content" class="content_page">

<?php
// >>>>>>>>>>>>>>>>> WIDGET SIDEBARS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    include 'sidebar.php';        // external link to showtime sidebar processor
// <<<<<<<<<<<<<<<<< END WIDGETS SIDEBARS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
?>            

        <div id="page" class="page_template_gallery">
        	<div id="gallery">
        
<?php 
////////////////////////////////////////////////////////////////////////////////
// GALLERY START
////////////////////////////////////////////////////////////////////////////////

if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
      the_content();
       $attachment_args = array(
         'post_type' => 'attachment',
         'numberposts' => -1,          // one attachement image per post
         'post_status' => null,
         'post_parent' =>$post->ID,
         'orderby' => 'menu_order ID'
    );
    $attachments = get_posts($attachment_args);
    if ($attachments) {
      foreach($attachments as $gall_image )                                                                 
      {
        $att_img =  wp_get_attachment_url( $gall_image->ID);
        echo '<a title="'.$gall_image->post_title.'" rel="prettyPhoto[Gallery]" href="'.$att_img.'" class="gallery_link icon_zoom">';
        echo  '<img src="'.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$att_img.'&amp;w=122&amp;h=122&amp;zc=1" class="gallery_thumb" alt=""/>';
        echo '</a>';
      }
    }
?>

<?php endwhile; endif; ?>



<?php 
////////////////////////////////////////////////////////////////////////////////
// GALLERY END
////////////////////////////////////////////////////////////////////////////////
?>		
			</div><!-- END "div#gallery" -->
        </div><!-- END "div#page" -->
        <div class="clear"></div>
    </div><!-- END "div#content" -->

</div><!-- END "div.content_shadow_right" -->    
</div><!-- END "div#content_wrapper" -->
<?php 
////////////////////////////////////////////////////////////////////////////////
// END CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>


<?php
 get_footer();
?>
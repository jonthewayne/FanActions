<?php
 /*
Template Name: Fullwidth
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
    <div class="intro_fullwidth">
    <h2><?php            
         echo $post->post_title;
    ?></h2>
     <div class="page_meta_box"><?php echo get_post_meta($post->ID, 'Description', true); ?></div>
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
    <div class="content_shadow_both">
        <div id="content" class="content_page">
<?php if (  $wp_query->have_posts()) : while (have_posts()) : the_post();  ?>
            <div id="page" class="page_template_fullwidth">
                <?php the_content();?>
                <?php if ( comments_open() ) comments_template(); ?>
                </div><!-- END "div#page" -->
            <div class="clear"></div>
<?php endwhile; endif; ?>
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
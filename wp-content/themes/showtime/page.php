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
    <div class="page_meta_box"><?php echo  htmlspecialchars_decode(stripslashes(get_post_meta($post->ID, 'Description', true))); ?></div>
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

        <div id="page" class="page_template_blog">
        
        
<?php 
////////////////////////////////////////////////////////////////////////////////
// POST START
////////////////////////////////////////////////////////////////////////////////
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
?>
        	<div class="entry" id="post-<?php the_ID();?>">

                  <?php the_content(); ?>
          </div><!-- END "div.entry" -->
          <?php if ( comments_open() ) comments_template(); ?>
<?php endwhile; endif; ?> 
<?php 
////////////////////////////////////////////////////////////////////////////////
// POST END
////////////////////////////////////////////////////////////////////////////////
?>
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
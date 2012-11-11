<?php /*
Template Name: Home Widget Template
*/ ?>
<?php
 get_header();
?>
<?php 
//$slider_type =  $_SESSION['slider_type'];
$slider_type = get_option('st_slider_type'); 
////////////////////////////////////////////////////////////////////////////////
// SLIDER CODE
////////////////////////////////////////////////////////////////////////////////
?>

<div id="intro_wrapper" class="intro_wrapper_<?php echo $slider_type;?>">
    <div class="intro_home intro_home_<?php echo $slider_type;?>">
       

    <?php 
      require 'sliders/slider_'.$slider_type.'.php';
    ?>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<?php 
////////////////////////////////////////////////////////////////////////////////
// END SLIDER CODE
////////////////////////////////////////////////////////////////////////////////
?>

<?php 
////////////////////////////////////////////////////////////////////////////////
// CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>
<div id="content_wrapper">
	<div id="content" class="content_<?php echo $slider_type;?>">
	<?php if(get_option('st_show_msg') == "true"){ ?>
        <div class="action">
            <h3><?php echo stripslashes(get_option('st_msgb_title'));?></h3>
            <a href="<?php echo get_option('st_msgb_link');?>" class="action_button"><span><?php echo stripslashes(get_option('st_msgb_link_title'));?></span></a>
        </div><!-- END "div.action" -->
  <?php } ?>
        <div class="clear"></div>
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        	<div class="entry">
        		<?php the_content(); ?>
            </div>
        <?php endwhile; ?>
                
        
        <div class="clear"></div>
        <div class="home_layout_1">
            <?php
           /* DESC: each widget 'sidebar' is wrapped by div widget_footer_holder_[count of the sidebars]
           all the styles are writed in CSS for easy edit. */
           $home_widget_count = get_option('st_home_widget_count');
           for($i = 1; $i<= $home_widget_count; $i++)
           {
            echo '<div class="col'.$home_widget_count.'">';
               if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Widget ".$i) ) :
                       endif;
            echo '</div>';
           }
           ?>

            <div class="clear"></div>
        </div><!-- END "div.home_layout_1" -->
    </div><!-- END "div#content" -->
</div><!-- END "div#content_wrapper" -->
<?php 
////////////////////////////////////////////////////////////////////////////////
// END CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>
<?php
 get_footer();
?>
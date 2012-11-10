<div id="footer_top_shadow"></div>
<div id="footer_wrapper">
<div id="footer">
  <?php
   /* DESC: each widget 'sidebar' is wrapped by div widget_footer_holder_[count of the sidebars]
   all the styles are writed in CSS for easy edit. */
   $footer_widget_count = get_option('st_footer_widget_count');
   for($i = 1; $i<= $footer_widget_count; $i++)
   {
    echo '<div class="col'.$footer_widget_count.'">';
       if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget ".$i) ) :
               endif;
    echo '</div>';
   }
   ?>
 
    <div class="clear"></div>
</div><!-- END "div#footer" -->
<div id="footer_bottom_wrapper">
        <div id="footer_bottom">   
             <div class="left"><?php echo stripslashes( st_option('st_footer_text_left') ); ?></div>
             <div class="right"><span class="logo_desc"><?php echo st_option('st_footer_text_right'); ?></span>
                <?php if(get_option('st_footer_image') != ''){ echo '<a href="'.get_bloginfo('wpurl').'"><img src="'.get_option('st_footer_image').'" class="logo_footer" alt="'.get_bloginfo('name').'" /></a>'; }?>
             </div>
        <div class="clear"></div>
        </div><!-- END "div#footer_bottom" -->
    </div><!-- END "div#footer_bottom_wrapper" -->
</div><!-- END "div#footer_wrapper" -->
<?php// echo st_option('st_tracking_analytics');?>
<?php wp_footer(); ?>
</body>
</html>
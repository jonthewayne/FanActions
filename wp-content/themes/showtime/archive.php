<?php

////////////////////////////////////////////////////////////////////////////////
// WP3 SETTINGS
////////////////////////////////////////////////////////////////////////////////
// this function merge portfolio posts with normal posts. Standartly, there are
// only classical posts allowed
query_posts(array_merge(array( 'post_type' => array('post', 'portfolio') ),$wp_query->query));   
// some strange reset, otherwise the WP3 dont accept the custom posts
$wp_query->the_post();
$wp_query->rewind_posts();
////////////////////////////////////////////////////////////////////////////////
// END WP3 SETTINGS
////////////////////////////////////////////////////////////////////////////////

  get_header();
?>

<div id="intro_wrapper">
    <div class="intro_page">
    <h2>Archives</h2>
  

    <div class="page_meta_box">
    
<?php if ( is_day() ) : ?>

    <?php printf( __( '%s', 'your-theme' ), get_the_time(get_option('date_format')) ) ?>

<?php elseif ( is_month() ) : ?>

    <?php printf( __( '%s', 'your-theme' ), get_the_time('F Y') ) ?>

<?php elseif ( is_year() ) : ?>

    <?php printf( __( '%s', 'your-theme' ), get_the_time('Y') ) ?>

<?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>

   <?php _e( 'Blog Archives', 'your-theme' ) ?>

<?php endif; ?>
</div>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<div id="content_wrapper">
 <div class="content_shadow_right">
	<div id="content" class="content_page">

<?php
// >>>>>>>>>>>>>>>>> WIDGET SIDEBARS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    include 'sidebar.php';        // external link to showtime sidebar processor
// <<<<<<<<<<<<<<<<< END WIDGETS SIDEBARS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
require 'blog-category-templates.php'; 
?>
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
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
    <h2><?php            
       /*  $cat_title = get_the_category();
         echo $cat_title[0]->cat_name;
         $cat_desc = category_description( $cat_title[0]->cat_ID );           */
          echo 'Search';
    ?></h2>
  

    <div class="page_meta_box">
    <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); ;// wp_specialchars($s, 1); 
    echo $allsearch->post_count;
   
      wp_reset_query(); ?>
     result<?php if($allsearch->post_count  !=1) echo 's'; ?> for '<?php echo $_GET['s']; ?>' </div>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<div id="content_wrapper">
 <div class="content_shadow_right">
	<div id="content" class="content_page">

<?php
// >>>>>>>>>>>>>>>>> WIDGET SIDEBARS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    include 'sidebar.php';        // external link to showtime sidebar processor
// <<<<<<<<<<<<<<<<< END WIDGETS SIDEBARS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
?>
<?php 
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
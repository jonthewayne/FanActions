<?php
////////////////////////////////////////////////////////////////////////////////
// WP3 SETTINGS
////////////////////////////////////////////////////////////////////////////////
// this function merge portfolio posts with normal posts. Standartly, there are
// only classical posts allowed
$category_id = $wp_query->get('cat');

if(!is_home() )
{

  $category_template = get_option($category_id.'-cat_template');
}
  get_header();
//        echo $category_template;
  if($category_template == 'portfolio-fullwidth' || $category_template == 'portfolio-fullwidth-2' || $category_template == 'portfolio-fullwidth-3' || $category_template == 'portfolio-fullwidth-4')
  { ?>
  
  <div id="intro_wrapper">
    <div class="intro_fullwidth">
    <a href="<?php     
                             $category_link = get_category_link( $category_id );
                              echo $category_link;  ?>"><h2><?php            
          single_cat_title("", true);
    ?></h2></a>
    <div class="page_meta_box"><?php echo category_description(); ?></div>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<div id="content_wrapper">
 <div class="content_shadow_both">
	<div id="content" class="content_page">
     

   <?php require 'portfolio-fullwidth-template.php'; ?>      
    
    <div class="clear"></div>      
    </div><!-- END "div#content" -->
    
</div><!-- END "div.content_shadow_right" -->
</div><!-- END "div#content_wrapper" -->
  
  <?php  
  }
  else
  {
  
?>

<div id="intro_wrapper">
    <div class="intro_page">
    <a href="<?php if(is_home()) echo get_bloginfo('url'); else{
                               if($category_id != "")
                              $category_link = get_category_link( $category_id );
                              echo $category_link;} ?>"><h2><?php            
       /*  $cat_title = get_the_category();
         echo $cat_title[0]->cat_name;
         $cat_desc = category_description( $cat_title[0]->cat_ID );           */
          if (is_home() ) echo  bloginfo('name');
          else single_cat_title("", true);
    ?></h2></a>
    <div class="page_meta_box"><?php echo category_description(); ?></div>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<div id="content_wrapper">
 <div class="content_shadow_right">
	<div id="content" class="content_page">
     
<?php
// >>>>>>>>>>>>>>>>> WIDGET SIDEBARS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    include 'sidebar.php';        // external link to showtime sidebar processor
// <<<<<<<<<<<<<<<<< END WIDGETS SIDEBARS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
   if(get_post_type( $post ) == 'post') require 'blog-category-templates.php'; 
   else require 'portfolio-category-templates.php';      
?>        
    <div class="clear"></div>      
    </div><!-- END "div#content" -->
    
</div><!-- END "div.content_shadow_right" -->
</div><!-- END "div#content_wrapper" -->
<?php 
}
////////////////////////////////////////////////////////////////////////////////
// END CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>
<?php
 get_footer();
?>      
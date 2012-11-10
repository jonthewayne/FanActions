<?php
 if(get_post_type( $post ) == 'portfolio') require_once 'single_portfolio.php';
 else
 {?>
<?php
 get_header();
?>
<?php 
////////////////////////////////////////////////////////////////////////////////
// INTRO (category info)
////////////////////////////////////////////////////////////////////////////////
$intro = 'page';

$img_height = get_option('st_blogpost_fixedimg_height_single');
if($img_height != '') $img_height = '&amp;h='.$img_height;
if(get_post_meta($post->ID, 'fullwidth', true) == "true") $intro = 'fullwidth';
?>
<div id="intro_wrapper">
    <div class="intro_<?php echo $intro; ?>">
     <a href="<?php       
                               $cat_title = get_the_category();
                              $category_id = $cat_title[0]->cat_ID;
                              $category_link = get_category_link( $category_id );
                              echo $category_link;  ?>"><h2><?php            
       /*  $cat_title = get_the_category();
         echo $cat_title[0]->cat_name;
         $cat_desc = category_description( $cat_title[0]->cat_ID );           */
         $cat_title = get_the_category();
         echo $cat_title[0]->cat_name;
         $cat_desc = category_description( $cat_title[0]->cat_ID ); 
    ?></h2></a>

    <div class="page_meta_box"><?php echo $cat_desc; ?></div>
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
$content_shadow = 'right';
$page_template = 'blog';
if(get_post_meta($post->ID, 'fullwidth', true) == "true")
{
  $content_shadow = 'both';
  $page_template = 'fullwidth';
}         
?>
<div id="content_wrapper">
<div class="content_shadow_<?php echo $content_shadow; ?>">
	<div id="content" class="content_page">

<?php
// >>>>>>>>>>>>>>>>> WIDGET SIDEBARS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
if(get_post_meta($post->ID, 'fullwidth', true) != "true")    include 'sidebar.php';        // external link to showtime sidebar processor
// <<<<<<<<<<<<<<<<< END WIDGETS SIDEBARS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
?>            

        <div id="page" class="page_template_<?php echo $page_template; ?>">
        
        
<?php 
////////////////////////////////////////////////////////////////////////////////
// POST START
////////////////////////////////////////////////////////////////////////////////
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
        $post_id_comments = $post->ID;
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
                  <?php the_content(); ?>
                  
                 
          </div><!-- END "div.entry" -->
          
			<h3><?php echo get_option('st_translate_share_blog');?></h3>
            <div id="share_post">
            
                              <?php
    $li = get_permalink($post->post_ID);   
      
     $link =  getLink("http://twitter.com/home",array("status"=> $li, "status"=> $li));
    if(get_option('st_blogpost_share_twitter') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="twitter" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/twitter.png" /></a>';
    
        $link =  getLink("http://www.facebook.com/share.php",array( "u"=> $li, "t"=>$post->post_title));
    if(get_option('st_blogpost_share_facebook') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="facebook" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/facebook.png" /></a>';
   
    $link =  getLink("mailto:",array( "body"=> $li, "subject"=>$post->post_title));
    if(get_option('st_blogpost_share_email') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="mailto" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/email.png" /></a>'; 
     
    
    $link =  getLink("http://delicious.com/post",array( "url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_delicious') == "true") echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="delicious" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/delicious.png" /></a>';
    

    $link =  getLink("http://www.mixx.com/submit",array( "page_url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_mixx') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="mixx" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/mixx.png" /></a>';
    
    $link =  getLink("http://www.google.com/bookmarks/mark",array( "op"=> "edit", "bkmk"=> $li, "title"=>$post->post_title,  "annotation"=>$post_object->post_content));
    if(get_option('st_blogpost_share_google') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="google" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/google.png" /></a>';
    
    $link =  getLink("http://www.designfloat.com/submit.php",array( "url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_designfloat') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="designfloat" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/designfloat.png" /></a>'; 

    $link =  getLink("http://www.friendfeed.com/share",array( "link"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_friendfeed') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="friendfeed" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/friendfeed.png" /></a>';   
    
    $link =  getLink("http://digg.com/submit",array( "url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_digg') =="true")  echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="digg" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/digg.png" /></a>';
    
    $link =  getLink("http://www.linkedin.com/shareArticle",array("mini"=> "true", "url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_linkedin') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="linkedin" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/linkedin.png" /></a>';               
    
    $link =  getLink("https://favorites.live.com/quickadd.aspx",array("marklet"=> "1", "url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_microsoft') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="microsoft" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/microsoft.png" /></a>';  
    
    $link =  getLink("http://reporter.nl.msn.com/",array("fn"=> "contribute", "URL"=> $li, "Title"=>$post->post_title));
    if(get_option('st_blogpost_share_msn') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="msn" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/msn.png" /></a>';     
    
    $link =  getLink("http://www.myspace.com/Modules/PostTo/Pages/",array("u"=> $li, "t"=>$post->post_title));
    if(get_option('st_blogpost_share_myspace') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="myspace" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/myspace.png" /></a>';  
    
    $link =  getLink("http://www.netvibes.com/share",array("url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_netvibes') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="netvibes" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/netvibes.png" /></a>';
    
    $link =  getLink("http://www.newsvine.com/_tools/seed&amp;save",array("u"=> $li, "h"=>$post->post_title));
    if(get_option('st_blogpost_share_newsvine') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="newsvine" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/newsvine.png" /></a>';
    
    $link =  getLink("http://posterous.com/share",array("linkto"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_posterous') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="posterous" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/posterous.png" /></a>';  

    $link =  getLink("http://reddit.com/submit",array("url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_reddit') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="reddit" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/reddit.png" /></a>';    
    
    $link = get_bloginfo('url')."/feed/";
    if(get_option('st_blogpost_share_rss') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="rss" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/rss.png" /></a>';    
    
    $link =  getLink("http://slashdot.org/bookmark.pl",array("url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_slashdot') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="slashdot" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/slashdot.png" /></a>';    
    
    $link =  getLink("http://www.stumbleupon.com/submit",array("url"=> $li, "title"=>$post->post_title));
    if(get_option('st_blogpost_share_stumbleupon') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="stumbleupon" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/stumbleupon.png" /></a>';  
    
    $link =  getLink("http://technorati.com/faves",array("add"=> $li));
    if(get_option('st_blogpost_share_technorati') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="technorati" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/technorati.png" /></a>'; 
    
    $link =  getLink("http://www.tumblr.com/share",array("u"=> $li, "t"=>$post->post_title));
    if(get_option('st_blogpost_share_tumblr') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="tumblr" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/tumblr.png" /></a>';
    
   
    $link =  getLink("http://buzz.yahoo.com/submit/",array("submitUrl"=> $li, "submitHeadline"=>$post->post_title));
    if(get_option('st_blogpost_share_yahoo') =="true")echo '<a rel="nofollow" href="'.$link.'"><img class="share_icon" alt="yahoo" src="'.get_bloginfo('template_url').'/gfx/icons/social/big/yahoo-buzz.png" /></a>';           
                   
                   ?>               
            
                <div class="clear"></div>
            </div><!-- END "div.share_post" -->
          
          
          <?php    
          if(get_option('st_blogpost_popular') == "true")
          {  
          $post_holder = $post;   ?>
			   <div id="rp_posts_wrapper">
                <?php if ( function_exists('related_posts') ) {related_posts(); echo '</div>';} ?>
                 <?php popularPosts(); ?>
                <div class="clear"></div>
            </div><!-- END "div#rp_posts_wrapper" -->
           <?php 
           $post = $post_holder;
           } ?>

          <?php    
          if(get_option('st_blogpost_authorbox') == "true")
          {     ?>
          <h3><?php echo get_option('st_translate_abox_about');?></h3>
          <div class="authorbox">
              <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); }?> 
              <div class="authorbox_text">
                
                  <p class="author_name"><?php echo get_option('st_translate_abox_written');?> <?php the_author_posts_link(); ?></p>
                  <p class="author_desc"><?php the_author_meta('description'); ?></p>
                <!--  <p class="author_links">
                      <a href="<?php the_author_meta('user_url'); ?>">Visit my Website</a>
                      <a href="<?php echo get_bloginfo('url')."/?author="; the_author_ID(); ?>">Read all my Articles</a>
                  </p>  -->
              </div>              
              <div class="clear"></div>
          </div><!-- END "div.authorbox" -->
         <?php } ?> 
         <?php if ( comments_open() ) comments_template(); ?>
<?php 
endwhile; endif; ?> 

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
<?php 
 }
?>
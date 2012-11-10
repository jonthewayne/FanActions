
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
    <h2>
    <?php 
    if(isset($_GET['author_name'])) :
        // NOTE: 2.0 bug requires: get_userdatabylogin(get_the_author_login());
        $curauth = get_userdatabylogin($author_name);
    else :
        $curauth = get_userdata(intval($author));
    endif;
    echo $curauth->display_name;
    ?>
    </h2>
    <div class="page_meta_box">About the author</div>
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

        <div id="page" class="page_template_blog">
        
          <div class="authorbox">
              <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email(), '80' ); }?> 
              <div class="authorbox_text">
                  <p class="author_name"><?php the_author_posts_link(); ?></p>
                  <p class="author_desc"><?php the_author_meta('description'); ?></p>
                 <!--  <p class="author_links">
                    <a href="<?php the_author_meta('user_url'); ?>"><?php echo get_option('st_authorpage_website'); ?></a>
                      <a href="<?php echo get_bloginfo('url')."/?author="; the_author_ID(); ?>"><?php echo get_option('st_authorpage_articles'); ?></a>
                  </p>   --> 
              </div>              
              <div class="clear"></div>
          </div><!-- END "div.authorbox" -->
<?php
////////////////////////////////////////////////////////////////////////////////
// POST START
////////////////////////////////////////////////////////////////////////////////
if (  $wp_query->have_posts()) : while (have_posts()) : the_post(); 
// >>>>>>>>>> BLOG POST >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

?>
        	<div class="entry" id="post-<?php the_ID();?>">
            	 <h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                 <div class="post_data">
                 	<?php if(get_option('st_blogpost_date') == 'true'){ ?><span class="post_date"><?php the_time('F j, Y'); ?></span><?php } ?>
                  <?php if(get_option('st_blogpost_author') == 'true'){ ?>  <span class="post_author"> <?php the_author_posts_link(); ?></span><?php } ?>
                  <?php if(get_option('st_blogpost_tags') == 'true' && has_tag()){ ?>
                    <span class="post_tags">
                        <?php the_tags('', ', ', ''); ?>
                    </span>
                  <?php } ?> 
                  <?php if(get_option('st_blogpost_categories') == 'true'){ ?>
                  <span class="post_categories">
                       <?php the_category(','); ?>
                  </span>
                  <?php } ?>   
                  <?php if(get_option('st_blogpost_comments') == 'true'){ ?> 
                    <span class="post_comments"><?php comments_popup_link('0 comments','1 comment', '% comments', 'comment_counter'); ?></span>
                  <?php } ?>
                 </div><!-- END "div.post_data" -->
                  <?php the_content(); ?>
              </div><!-- END "div.entry" --> 
      <?php 

// <<<<<<<<<< BLOG POST <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<


endwhile; 
else:
?>
<h2> Not found. </h2>
<p> Sorry, but you are looking for something that isn't here.</p>
<?php
endif; 
?>            
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>  
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
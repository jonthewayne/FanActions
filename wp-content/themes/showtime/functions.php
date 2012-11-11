<?php
// Include project functions
include_once(TEMPLATEPATH.'/lib/project_functions.php'); 

add_action('pre_get_posts', 'change_pagination');

function get_actual_cat($query) {
	if($query->query_vars['cat'] != '') return $query->query_vars['cat'];
	else {
		$category = get_category_by_slug($query->get('category_name'));
		return $category->term_id;
	}
	
}
$is_main_loop = true;



function change_pagination( $query )
{	
global $is_main_loop;
if( !$is_main_loop ) return;
$is_main_loop = false;
	
	//global $wp_query;
	if( $query->is_category )
	{
	//	var_dump($query);
	//	echo get_cat_id($query->get('category_name'));
		
	//	$category = get_category_by_slug($query->get('category_name'));
	//	echo get_actual_cat($query);
//		var_dump($query);
		$cat_id = get_actual_cat($query);
		$query->set( 'post_type', array( 'post', 'portfolio' )  );
		if(get_option($cat_id.'-cat_orderby') != 'default' && get_option($cat_id.'-cat_orderby') != '')
		{
			$query->set( 'orderby', get_option($cat_id.'-cat_orderby')  );
			$query->set( 'order', get_option($cat_id.'-order')  );
		 //  query_posts(array_merge(array( 'orderby' => get_option($cat_id.'-cat_orderby'), 'order' => get_option($cat_id.'-cat_order')),$wp_query->query));
		} 
		
		$ppp = get_option($cat_id.'-cat_posts');
	//	echo $cat_id;
		if($ppp != '') {
			$query->set('posts_per_page',$ppp);
		}
	//	echo $query->query_vars['cat'];
	 /* $cat_id = $wp_query->get('cat');
      echo $cat_id;
	
	  if(get_option($cat_id.'-cat_orderby') != 'default' && get_option($cat_id.'-cat_orderby') != '')
	  {
	     query_posts(array_merge(array( 'orderby' => get_option($cat_id.'-cat_orderby'), 'order' => get_option($cat_id.'-cat_order')),$wp_query->query));
	  } */
	}
	return $query;
}

$theme_name = 'Showtime';
//if(!class_exists('PHPMailer'))
if (!class_exists("phpmailer")) {
require_once(ABSPATH."wp-includes/class-phpmailer.php");
}
function my_init_method() {
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js');
wp_enqueue_script( 'jquery' );
}
if(!is_admin())
    add_action('init', 'my_init_method');
////////////////////////////////////////////////////////////////////////////////
// LIMITING EXCERPTS
////////////////////////////////////////////////////////////////////////////////
function new_excerpt_more($post) {
	return '<a href="'. get_permalink($post->ID) . '">' . '(more...)' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
////////////////////////////////////////////////////////////////////////////////
// CUSTOM COMMENT FUNCTION
////////////////////////////////////////////////////////////////////////////////
      // Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  $GLOBALS['comment_depth'] = $depth;
  $auth_link = get_comment_author_link();
  if($auth_link !=''){
  $start = strpos($auth_link, "'");
  $end = strpos($auth_link, "'", $start + 1 );
  $before_gravatar = '<a href="'.substr($auth_link, $start + 1, $end-$start-1).'">'; $after_gravatar = '</a>';}
  
?>
   
  <li id="comment-<?php comment_ID() ?>" class= "clearfix">
    <div class="user_wrapper">
     <?php echo $before_gravatar.get_avatar( $comment,  80).$after_gravatar; ?>
      <p class="comment_user"><?php comment_author_link() ?></p>
      <p class="comment_date"><?php comment_date('F  j, Y'); ?></p>
    </div>
    <div class="message">
        <img src="<?php echo get_bloginfo("template_url"); ?>/gfx/c_arrow.png" class="c_arrow" alt="" />
        <?php comment_text(); ?>
<div class="cancel-comment-reply">
       <?php
 if($args['type'] == 'all' || get_comment_type() == 'comment') :

    comment_reply_link(array_merge($args, array(

     'reply_text' => __('Reply','your-theme'),

     'login_text' => __('Log in to reply.','your-theme'),

     'depth' => $depth,

     'before' => '',

     'after' => ''

    )));

   endif;
?>
</div>
        </div><div class="clear"></div>

   </li>

  
      <?php } // end custom_comments


////////////////////////////////////////////////////////////////////////////////
// FRESHPANEL INCLUDING
////////////////////////////////////////////////////////////////////////////////
 include 'freshwork/freshpanel/freshpanel.php';     // theme options panel  
 include 'freshwork/freshprice/freshprice.php';     // theme options panel                                  
 include 'freshwork/writepanels.php';               // page & post writepanels
 include 'freshwork/writepanels-category.php';      // category writepanels
 include 'freshwork/freshslider/freshslider.php';      // category writepanels
 include 'freshwork/functions/popular_posts.php';      // popular posts at the bottom of single post
 include 'freshwork/functions/widgets.php';            // widgets (popular posts widget, freshface contact form widget)
 include 'freshwork/functions/shortcodes.php';      // all the hustle with shortcodes
 include 'freshwork/functions/freshtour.php';      // freshtour
 
  if ( is_admin() )   // require only files which we need in admin
  {
     add_action('admin_menu', 'manage_admin_menu');     // hustle backend admin menu's
  }
  
  function manage_admin_menu()
  {
    global $theme_name;
    // main page
    add_menu_page('FreshPanel' , 'FreshPanel', 'administrator', basename(__FILE__), 'freshpanel_admin'); 
      add_submenu_page( basename(__FILE__), 'Slider manager', 'FreshSlider', 'manage_options', 'slider_manager', 'slider_manager');
     // add_menu_page('Slider manager', 'FreshSlider', 'administrator', basename(__FILE__), 'slider_manager');    
      add_submenu_page( basename(__FILE__), 'Pricing Table - Generator', 'FreshPrice', 'manage_options', 'pricing_table', 'pricing_table');
      add_submenu_page( basename(__FILE__), 'Take a Tour - Generator', 'FreshTour', 'manage_options', 'tour', 'tour');
    //  add_menu_page('Take a Tour - Generator', 'FreshTour', 'administrator', basename(__FILE__), 'tour');    
  }      
////////////////////////////////////////////////////////////////////////////////
// NAVIGATION WIDGET
////////////////////////////////////////////////////////////////////////////////
  if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Navigation',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));  
////////////////////////////////////////////////////////////////////////////////
// WIDGET SIDEBARS
////////////////////////////////////////////////////////////////////////////////	
// PORTFOLIO, BLOG, PAGE, SINGLE

/*
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Home Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>',
	));
*/
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Blog Sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>',
)); 

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Portfolio Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>',
	));  
  
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Page Sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget_title">',
		'after_title' => '</h3>',
	));  	   	   	

////////////////////////////////////////////////////////////////////////////////
// HOME WIDGETS
////////////////////////////////////////////////////////////////////////////////
$home_widget_count = get_option('st_home_widget_count');//3;   // how many sidebars we have? theme options
for($i = 1; $i<= $home_widget_count; $i++)
{
  if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Home Widget '.$i,
		'before_widget' => '<div class="module">',
		'after_widget' => '</div><!-- END "div.module" -->',
		'before_title' => '	<h3>',
		'after_title' => '</h3>',
	));
}
////////////////////////////////////////////////////////////////////////////////
// SIDEBAR WIDGETS
////////////////////////////////////////////////////////////////////////////////
$footer_widget_count = get_option('st_footer_widget_count');  // how many sidebars we have? theme options
for($i = 1; $i<= $footer_widget_count; $i++)
{
  if ( function_exists('register_sidebar') )
	register_sidebar(array(
	  'name' => 'Footer Widget '.$i,
		'before_widget' => '<div class="widget_footer">',
		'after_widget' => '</div></div>',
		'before_title' => '	<h3>',
		'after_title' => '</h3><div class="hr"></div><div class="widget_footer_content">',
	));
}

////////////////////////////////////////////////////////////////////////////////
// SIDEBAR WIDGETS
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
// SHOWTIME INIT
////////////////////////////////////////////////////////////////////////////////
function init_post_types()
{        
        
  register_post_type( 'portfolio',
              array( 'label' => __('Portfolio Post'),
                    'public' => true,
                    'publicly_queryable' => true,
                	  'show_ui' => true,
                    'query_var' => true, 'show_ui' => true ,  'supports' => array(
                                        'title',
                                        'editor',
                                        'post-thumbnails',
                                        'excerpts',
                                        'trackbacks',
                                        'custom-fields',
                                        'comments',
                                        'revisions')) );
  register_taxonomy_for_object_type('category', 'portfolio');   
}
function showtime_setup()
{
  add_theme_support( 'menus' );
}
add_filter('widget_text', 'do_shortcode'); // enable shortcodes in widgets
//add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {
   if($query->get( 'post_type') == "" && is_category())
		$query->set( 'post_type', array( 'post', 'portfolio', 'attachment' ) );

	return $query;
}
add_action( 'after_setup_theme', 'showtime_setup' );
add_action('init', 'init_post_types');

////////////////////////////////////////////////////////////////////////////////
// WIDGET TITLE
////////////////////////////////////////////////////////////////////////////////
add_filter('single_cat_title', 'single_cat_apostrophe');
function single_cat_apostrophe( $text )
{
  return str_replace('&#8217;',"'", $text); 
}
add_filter('widget_title', 'parse_html_widget_title', 11);
function parse_html_widget_title( $text )
{
    return str_replace(array('[first]', '[/first]'), array('<span class="firstline">', '</span><br />'), $text);

} 

////////////////////////////////////////////////////////////////////////////////
// GET SHOWTIME OPTION
////////////////////////////////////////////////////////////////////////////////
function st_option($name)
{
    return htmlspecialchars_decode(stripslashes(get_option($name)));
}
// 360     580
////////////////////////////////////////////////////////////////////////////////
// GET LINK
////////////////////////////////////////////////////////////////////////////////
 function getLink($url,$params=array(),$use_existing_arguments=false) {
    if($use_existing_arguments) $params = $params + $_GET;
    if(!$params) return $url;
    $link = $url;
    if(strpos($link,'?') === false) $link .= '?'; //If there is no '?' add one at the end
    elseif(!preg_match('/(\?|\&(amp;)?)$/',$link)) $link .= '&amp;'; //If there is no '&' at the END, add one.
    
    $params_arr = array();
    foreach($params as $key=>$value) {
        if(gettype($value) == 'array') { //Handle array data properly
            foreach($value as $val) {
                $params_arr[] = $key . '[]=' . urlencode($val);
            }
        } else {
            $params_arr[] = $key . '=' . urlencode($value);
        }
    }
    $link .= implode('&amp;',$params_arr);
    
    return $link;
} 
?>
<?php 
$category_id = $wp_query->get('cat');
$category_template = get_option($category_id.'-cat_template');
if(strpos($category_template, 'ortfolio') != false )
    header("Status: 200 OK");
$slider_type = get_option('st_slider_type');
$skin_type = get_option('st_color_skin');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?> <?php $p_title = wp_title('',false,''); if($p_title !="") echo ' | '.$p_title; ?></title>

<!-- STYLESHEET -->
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url');?>/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url');?>/skins/<?php echo $skin_type; ?>/<?php echo $skin_type; ?>.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url');?>/js/prettyPhoto/css/prettyPhoto.css"/>
<noscript>
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url');?>/style-noscript.css"/>
</noscript>
<!-- SCRIPTS-->
<?php wp_enqueue_script("jquery");  // JQUERY including by wordpress ?> 
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/main.js"></script>

<!--<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/cufon.js"></script>-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,300,800,300italic,400italic,600italic,700italic,800italic' rel='stylesheet' type='text/css'>


<!--<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/cufon.config.js"></script>-->

<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
var autoslide_time =<?php if(get_option('st_show_slider_autoslide') == "false")echo 0; else echo get_option('st_show_slider_interval'); ?>;
jQuery(document).ready(function($){$("a[rel^='prettyPhoto']").prettyPhoto();  } );</script>
<?php if(is_front_page()) { ?><link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url');?>/sliders/slider_<?php echo $slider_type ?>.css"/><?php } ?>
<?php if(is_front_page() && strpos($slider_type, 'atic') == false){ ?>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/sliders/scripts/slider_<?php echo $slider_type;  ?>.js"></script>
<?php }?>

<link href="<?php echo get_bloginfo('template_url');?>/notifier/css/jnotifier.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/notifier/js/jnotifier.min.js"></script>


<script type="text/javascript">
<?php if(strpos($_SERVER["REQUEST_URI"],'thank-you')) { ?>
	jQuery(document).ready(function($){
		$.jnotify('FanActions Launch Contest', 'JACKPOT! <br>100 points toward the $1000 launch prize!<br><a href="#">Enter Now</a>', '<?php echo get_bloginfo('template_url');?>/notifier/images/100points.png', {lifeTime: 8000			});
	} );
<?php } else { ?>
	jQuery(document).ready(function($){
		$.jnotify('FanActions Launch Contest', 'You just earned 5 points toward the $1000 launch prize!<br><a href="#">Enter Now</a>', '<?php echo get_bloginfo('template_url');?>/notifier/images/5points.png', {lifeTime: 8000			});
	} );
<?php } ?>
</script>

<style type="text/css">
	.intro_text {
		width: 960px;
		text-align: center;
		font-size: 18px;
		margin: 25px 0 0 0;
	}
	#content label {
		margin: 0 0 0 0;
		font-size: 13px;
	}
	.gform_wrapper form {
		text-align: left;
		padding-left: 374px;
	}
	#gforms_confirmation_message {
		padding-left: 374px;
	}
	.gform_footer.top_label {
		padding-left: 12px;
	}
</style>

</head>
                                                                                      
<body>
<?php 
////////////////////////////////////////////////////////////////////////////////
// HEADER INFO, SAME FOR ALL PAGES
////////////////////////////////////////////////////////////////////////////////
?>

<div id="header_wrapper">
    <div id="header">
        <div id="logo">
            <a href="<?php echo get_bloginfo('url');?>"><img src="<?php echo get_option('st_head_logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
        </div>
        <div class="search_top">
          <form id="searchform" action="<?php echo get_bloginfo('url');?>" method="get">
            <p><input type="text" name="s" id="s" class="search_top_input" value="<?php echo get_option('st_srch_input_text');?>" onfocus="if (this.value == '<?php echo get_option('st_srch_input_text');?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo get_option('st_srch_input_text');?>';}"/>
           <input type="submit" value="" name="submit" class="search_top_btn"/></p>
          </form>
        </div><!-- END "div.search" -->
        <div class="clear"></div>
    </div><!-- END "div#header" -->
</div><!-- END "div#header_wrapper" -->
<div id="nav_wrapper">
    <?php 
////////////////////////////////////////////////////////////////////////////////
// NAVIGATION WIDGET    
////////////////////////////////////////////////////////////////////////////////
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Navigation") ) :
    endif; 
////////////////////////////////////////////////////////////////////////////////
// NAVIGATION WIDGET END    
////////////////////////////////////////////////////////////////////////////////    
    ?>
</div><!-- END "div#nav_wrapper" -->

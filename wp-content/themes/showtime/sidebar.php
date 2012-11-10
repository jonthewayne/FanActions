<div id="sidebar_wrapper">
	<div id="sidebar_top"></div><!-- END "div#sidebar_top" -->
    <div id="sidebar">
    	<div id="sidebar_widgets">
			<?php

            ////////////////////////////////////////////////////////////////////////////////
            // SIDEBAR CODE
            ////////////////////////////////////////////////////////////////////////////////
                if(is_front_page())
                {
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Sidebar") ) :
                  endif;

                }
                else if(get_post_type($post) == "post" || is_search()  )
                {
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Blog Sidebar") ) :
                  endif;

                }
                else if((get_post_type($post) != "post" && get_post_type($post) != "page") || get_post_type() == "")
                {
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Portfolio Sidebar") ) :
                  endif;

                }
                else if(get_post_type($post) == "page" || is_author() || is_404() )
                {
                  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Page Sidebar") ) :
                  endif;
                }

            ?>
        </div><!-- END "div#sidebar_widgets" -->
    </div><!-- END "div#sidebar" -->
</div><!-- END "div#sidebar_wrapper" -->
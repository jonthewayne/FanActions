<?php



  //////////////////////////////////////////////////////////////////////////////
  // VARIABLES
  //////////////////////////////////////////////////////////////////////////////
  $themename = "FreshPanel";  
  $shortname = "st";        
  //////////////////////////////////////////////////////////////////////////////
  // FRESHPANEL SETTINGS
  //////////////////////////////////////////////////////////////////////////////
  $options = array (  
  
  //////////////////////////////////////////////////////////////////////////////
  // GENERAL
  //////////////////////////////////////////////////////////////////////////////
                                      
   array( "name" => "General",  
          "type" => "navigation",
          "icon" => "general"),  
  //////////////////////////////////////////////////////////////////////////////
  // PERFORMANCE TAB
  //////////////////////////////////////////////////////////////////////////////

    //////////////////////////////////////////////////////////////////////////////
  // CATEGORIES TAB
  //////////////////////////////////////////////////////////////////////////////

   
  

  //////////////////////////////////////////////////////////////////////////////
  // CATEGORIES TAB
  //////////////////////////////////////////////////////////////////////////////
        array( "name" => "Logo",  
            "type" => "tab"),  
   
     
       array( "name" => "Please insert here the URLs of your Logo images. TIP: Use transparent GIF or PNG files.",  
              "type" => "info"), 
    


         
       array( "name" => "Header Logo URL",  
              "desc" => "Please insert the URL of your Logo image for Header (big)",  
              "id" => $shortname."_head_logo",  
              "type" => "text",
              "std" => ""), 


        array( "name" => "Footer Logo URL",  
            "desc" => "Please insert the URL of your Logo image for Footer (smaller)",  
            "id" => $shortname."_footer_image",  
            "type" => "text",
            "std" => ""), 
              
              
      
     array(  "type" => "tab-close"), 
 
    
            array( "name" => "Footer",  
            "type" => "tab"),  
    
      array( "name" => "Adjust here the content of your Footer. NOTE: Footer will be divided by the number of Widgetized areas you set below.",  
          "type" => "info"), 
 
 
       array( "name" => "Number of Widgetized Areas in Footer",  
              "desc" => "Enter the number of Widgetized Areas in Footer. This number will also divide the layout of your Footer and create the same number of Widgetized areas in 'wp-admin -> appearance -> widgets' as well.",  
              "id" => $shortname."_footer_widget_count",  
              "type" => "text",
              "std" => "3"), 
         
     array( "name" => "Footer Text Left",  
        "desc" => "Enter any text you want. This will appear on the left side of your footer (at the total bottom).",  
        "id" => $shortname."_footer_text_left",  
        "type" => "text",
        "std" => "&copy; 2009 Showtime! - Business & Portfolio Wordpress Theme by _freshface"),  

            

     array( "name" => "Footer Text Right",  
        "desc" => "Enter any text you want. This will appear on the right side of your footer (at the total bottom). <br/><br/>IMPORTANT NOTE: Make sure this one is made of two lines otherwise it will not look nice. Use the html's BR tag for creating a new line.",  
        "id" => $shortname."_footer_text_right",  
        "type" => "text",
        "std" => "Business & Portfolio<br />Wordpress Theme"),



                                     

     array(  "type" => "tab-close"), 


	array( "name" => "Cuf&#243;n",  
            "type" => "tab"),  
    
      array( "name" => "Here is an option for selecting specific Unicode character set. Very usefull if you want to use Greek, Russian, Cyrillic etc.",  
          "type" => "info"), 
 
 
       array( "name" => "Your Language",  
              "desc" => "Select your language",  
              "id" => $shortname."_language_type",  
              "type" => "select",
              "options" => array("Basic Latin", "Basic Latin + Supplement 1", "Basic Latin + Extended-A",
               "Basic Latin + Extended-B", "Basic Latin + Supplement 1 + Extended A", "Basic Latin + Cyrillic", "Basic Latin + Russian", "Basic Latin + Greek and Coptic", "All"),
              "std" => "Basic Latin"),  
         
     array(  "type" => "tab-close"),


		array( "name" => "Panel",  
            "type" => "tab"),  

     
       array( "name" => "General settings for FreshPanel. Adjust to your liking.",  
              "type" => "info"), 
              
    
       array( "name" => "Header Links",  
              "desc" => "Enable / Disable links in FreshPanel's header.",  
              "id" => $shortname."_fr_links",  
              "type" => "checkbox",  
              "std" => "true"),                

      
     array(  "type" => "tab-close"),
     
        
      array( "name" => "Reset",  
            "type" => "tab"),  

     
       array( "name" => "If you want to reset FreshPanel to default values, please hit the red button below.",  
              "type" => "info"), 
              
    
       array( "name" => "Reset",  
 
              "type" => "reset",  
              "std" => "true"),                

      
     array(  "type" => "tab-close"),

     
    
     
   array( "type" => "navigation-close"),

  //////////////////////////////////////////////////////////////////////////////
  // HOME PAGE
  //////////////////////////////////////////////////////////////////////////////
     array( "name" => "Home Page",  
            "type" => "navigation", "icon" => "home"),
            
     array( "name" => "Slider",  
            "type" => "tab"),  
     
       array( "name" => "Setup the Slider on your Home page. You can customize here things like sliding speed and slider type.",  
              "type" => "info"),  

              
       array( "name" => "Automatic Sliding",  
              "desc" => "Enable / Disable Automatic Sliding",  
              "id" => $shortname."_show_slider_autoslide",  
              "type" => "checkbox",
              "std" => "true"),  
                          
       array( "name" => "Sliding Interval (Speed) in 'ms'",  
              "desc" => "Sliding Interval in ms, e.g. '3000' = 3 seconds",  
              "id" => $shortname."_show_slider_interval",  
              "type" => "text",
              "std" => "3000"),  

       array( "name" => "Slider type",  
              "desc" => "Select slider type",  
              "id" => $shortname."_slider_type",  
              "type" => "select",
              "options" => array("3d", "freshcubes", "paralel", "static1", "static2", "static3"),
              "std" => "3d"),  

                          
     
                           

     array(  "type" => "tab-close"),

             array( "name" => "Call to Action",  
              "type" => "tab"),  
       
       array( "name" => 'You can customize here the "Call to Action" area on your home page.',  
              "type" => "info"),  
              
              
           array( "name" => "Call to Action area",  
              "desc" => "Enable / Disable Call to Action on your Home Page",  
              "id" => $shortname."_show_msg",  
              "type" => "checkbox",
              "std" => "true"),
                          
              

              
        array( "name" => "Call to Action Title",  
              "desc" => "Insert here the Title of your Call to Action area",  
              "id" => $shortname."_msgb_title",  
              "type" => "text",  
              "std" => "See complete portfolio"),
              
                                  
        array( "name" => "Call to Action Button Text",  
              "desc" => "Insert here the text of your Call to Action button",  
              "id" => $shortname."_msgb_link_title",  
              "type" => "text",  
              "std" => "Learn more"),     
                  
        array( "name" => "Call to Action Button URL",  
              "desc" => "Insert here link URL of your Call to Action Button",  
              "id" => $shortname."_msgb_link",  
              "type" => "text",  
              "std" => ""),     
              
                                         
                                                    
      
     array(  "type" => "tab-close"),
      
      
    array( "name" => "Widgets",  
      "type" => "tab"),  
      
          
     array( "name" => ' Set the content of your Home Page. NOTE: Home Page will be divided by the number of Widgetized areas you set below.',  
            "type" => "info"),  
               
           array( "name" => "Number of Widgetized Areas in Home",  
              "desc" => "Enter the number of Widgetized Areas in Home. This number will also divide the layout of your Home and create the same number of Widgetized areas in 'wp-admin -> appearance -> widgets' as well.",  
              "id" => $shortname."_home_widget_count",  
              "type" => "text",
              "std" => "3"), 
     array(  "type" => "tab-close"),
   
   array( "type" => "navigation-close"),
     
    array( "name" => "Blog",  
        "type" => "navigation", "icon" => "blog"),
        
        array( "name" => "General", 
                 "type" => "tab"), 
                 
           array( "name" =>  "You can adjust here some general settings for your Blog. For example: image height, lightbox, authorbox, etc.",  
        "type" => "info"),  
                       
      array( "name" => "Show AuthorBox ?",  
              "desc" => "Turn ON/OFF the 'after post' displaying of 'Author Box' which contains information about the author of the Blog Post.<br/><br/>TIP: You can adjust the content of this Author Box in 'wp-admin -> users -> user' or just 'wp-admin -> users -> Your Profile'.",  
              "id" => $shortname."_blogpost_authorbox",  
              "type" => "checkbox",  
              "std" => "true"),     
	  
      array( "name" => "Open Images in lightbox?",  
              "desc" => "Open blog images in lightbox?",  
              "id" => $shortname."_blogpost_lightbox",  
              "type" => "checkbox",  
              "std" => "true"),                   

      array( "name" => "Blog Single view - Fixed Image height",  
              "desc" => "Set the fixed height of images in blog single view. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_blogpost_fixedimg_height_single",  
              "type" => "text",  
              "std" => "220"),                               

      array( "name" => "Blog - Fixed Image height",  
              "desc" => "Set the fixed height of images in blog. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_blogpost_fixedimg_height",  
              "type" => "text",  
              "std" => "220"), 
                                                            
         
          array(  "type" => "tab-close"),    
                
        
        array( "name" => "Post Meta", 
                 "type" => "tab"), 
           array( "name" =>  "You can adjust here what will be displayed in the 'post meta' section in your blog.",  
        "type" => "info"),         
        
       array( "name" => "Post Meta - Date",  
              "desc" => "Display the Date in Post Meta on Blog Posts?",  
              "id" => $shortname."_blogpost_date",  
              "type" => "checkbox",  
              "std" => "true"),             
              
        array( "name" => "Post Meta - Author",  
              "desc" => "Display the Author in Post Meta on Blog Posts?",  
              "id" => $shortname."_blogpost_author",  
              "type" => "checkbox",  
              "std" => "true"),    

      array( "name" => "Post Meta - Categories",  
              "desc" => "Display the Categories in Post Meta on Blog Posts?",  
              "id" => $shortname."_blogpost_categories",  
              "type" => "checkbox",  
              "std" => "true"),                                  
              
        array( "name" => "Post Meta - Tags",  
              "desc" => "Display the Tags in Post Meta on Blog Posts?",  
              "id" => $shortname."_blogpost_tags",  
              "type" => "checkbox",  
              "std" => "true"),   
              
            array( "name" => "Post Meta - Comments",  
              "desc" => "Display the Comments in Post Meta on Blog Posts?",  
              "id" => $shortname."_blogpost_comments",  
              "type" => "checkbox",  
              "std" => "true"),         
          array(  "type" => "tab-close"),    
          
                        


        array( "name" => "Related & Popular", 
           "type" => "tab"), 
           array( "name" => "Related & Popular post settings.",  
        "type" => "info"),    
        
        array( "name" => "Show Popular & Related posts ?",  
              "desc" => "Turn ON/OFF the 'after post' Related & Popular section on  Blog Posts",  
              "id" => $shortname."_blogpost_popular",  
              "type" => "checkbox",  
              "std" => "true"),   
        
        array( "name" => "Popular & Related post count?",  
        "desc" => "Turn ON/OFF the 'after post' Related & Popular section on  Blog Posts",  
        "id" => $shortname."_blogpost_popular_count",  
        "type" => "text",  
        "std" => "3"),   
                      
         array(  "type" => "tab-close"),
        
          array( "name" => "Sharing",  
            "type" => "tab"), 
            
               array( "name" => "You can adjust here all settings regarding the Blog section sharing.",  
        "type" => "info"),         
        
                       
      array( "name" => "Show Sharebox ?",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share",  
              "type" => "checkbox",  
              "std" => "true"),  
              
      array( "name" => "Twitter - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_twitter",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Facebook - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_facebook",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "LinkedIn - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_linkedin",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Email - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_email",  
              "type" => "checkbox",  
              "std" => "true"),               
              
        array( "name" => "Digg - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_digg",  
              "type" => "checkbox",  
              "std" => "true"),                       
              
              
      array( "name" => "StumbleUpon - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_stumbleupon",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Tumblr - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_tumblr",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Delicious - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_delicious",  
              "type" => "checkbox",  
              "std" => "true"), 
              
          array( "name" => "Mixx - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_mixx",  
              "type" => "checkbox",  
              "std" => "true"),            
              
          array( "name" => "Google - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_google",  
              "type" => "checkbox",  
              "std" => "true"),    
              
          array( "name" => "Designfloat - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_designfloat",  
              "type" => "checkbox",  
              "std" => "true"),       

              
              
          array( "name" => "FriendFeed - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_friendfeed",  
              "type" => "checkbox",  
              "std" => "true"),       
              
              
          array( "name" => "Microsoft - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_microsoft",  
              "type" => "checkbox",  
              "std" => "true"),                            
              

          array( "name" => "MSN - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_msn",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                     
                                     
                                     

          array( "name" => "Myspace - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_myspace",  
              "type" => "checkbox",  
              "std" => "true"),    
              
                                     

          array( "name" => "Netvibes - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_netvibes",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                                   
                                 
                                 
          array( "name" => "Newsvine - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_Newsvine",  
              "type" => "checkbox",  
              "std" => "true"),         
              
         array( "name" => "Posterous - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_posterous",  
              "type" => "checkbox",  
              "std" => "true"),       
              
       array( "name" => "Reddit - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_reddit",  
              "type" => "checkbox",  
              "std" => "true"),         
              
       array( "name" => "Slashdot - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_slashdot",  
              "type" => "checkbox",  
              "std" => "true"),     
              
       array( "name" => "Technorati - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_technorati",  
              "type" => "checkbox",  
              "std" => "true"),     
              
        array( "name" => "Yahoo - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_yahoo",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                                                         
                                                                                                                                                                 
                                                                                                                                                      
              
      array( "name" => "Rss - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_blogpost_share_rss",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                                                                                               
  
         array(  "type" => "tab-close"), 
        
   array( "type" => "navigation-close"),  
   
  array( "name" => "Portfolio",  
        "type" => "navigation", "icon" => "images"),
    array( "name" => "Post Meta",  
            "type" => "tab"),  

     
       array( "name" => "You can adjust here all settings regarding the Portfolio section, mainly the portfolio post meta data.",  
              "type" => "info"), 
              
   array( "name" => "Portfolio Post Meta - Date",  
              "desc" => "Display the Date in Post Meta on Portfolio Posts?",  
              "id" => $shortname."_portfolio_date",  
              "type" => "checkbox",  
              "std" => "true"),             
              
        array( "name" => "Portfolio Post Meta - Author",  
              "desc" => "Display the Author in Post Meta on Portfolio Posts?",  
              "id" => $shortname."_portfolio_author",  
              "type" => "checkbox",  
              "std" => "true"),    

      array( "name" => "Portfolio Post Meta - Categories",  
              "desc" => "Display the Categories in Post Meta on Portfolio Posts?",  
              "id" => $shortname."_portfolio_categories",  
              "type" => "checkbox",  
              "std" => "true"),                                  
              
        array( "name" => "Portfolio Post Meta - Tags",  
              "desc" => "Display the Tags in Post Meta on Portfolio Posts?",  
              "id" => $shortname."_portfolio_tags",  
              "type" => "checkbox",  
              "std" => "true"),   
              
            array( "name" => "Portfolio Post Meta - Comments",  
              "desc" => "Display the Comments in Post Meta on Portfolio Posts?",  
              "id" => $shortname."_portfolio_comments",  
              "type" => "checkbox",  
              "std" => "true"),                                     
           array(  "type" => "tab-close"),
           
      array( "name" => "AuthorBox",  
            "type" => "tab"),   
               array( "name" => "You can adjust here the settings for 'AuthorBox' on your portfolio post's 'single' view.",  
              "type" => "info"),               
                      
        array( "name" => "Show AuthorBox ?",  
              "desc" => " Turn ON/OFF the 'after post' displaying of 'Author Box' which contains information about the author of the Portfolio Post.<br/><br/>TIP: You can adjust the content of this Author Box in 'wp-admin -> users -> user' or just 'wp-admin -> users -> Your Profile'.",  
              "id" => $shortname."_portfoliopost_authorbox",  
              "type" => "checkbox",  
              "std" => "true"),    
                      
     array(  "type" => "tab-close"), 
        array( "name" => "Sharing",  
            "type" => "tab"),  
            
               array( "name" => "You can adjust here all settings regarding the Portfolio section sharing",  
              "type" => "info"),     
             array( "name" => "Show Sharebox ?",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share",  
              "type" => "checkbox",  
              "std" => "true"),  
                  
      array( "name" => "Twitter - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_twitter",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Facebook - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_facebook",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "LinkedIn - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_linkedin",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "StumbleUpon - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_stumbleupon",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Tumblr - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_tumblr",  
              "type" => "checkbox",  
              "std" => "true"), 
              
      array( "name" => "Delicious - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_delicious",  
              "type" => "checkbox",  
              "std" => "true"), 
              
          array( "name" => "Mixx - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_mixx",  
              "type" => "checkbox",  
              "std" => "true"),            
              
          array( "name" => "Google - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_google",  
              "type" => "checkbox",  
              "std" => "true"),    
              
          array( "name" => "Designfloat - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_designfloat",  
              "type" => "checkbox",  
              "std" => "true"),       
              

              
              
          array( "name" => "FriendFeed - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_friendfeed",  
              "type" => "checkbox",  
              "std" => "true"),       
              
              
          array( "name" => "Microsoft - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_microsoft",  
              "type" => "checkbox",  
              "std" => "true"),                            
              

          array( "name" => "MSN - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_msn",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                     
                                     
                                     

          array( "name" => "Myspace - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_myspace",  
              "type" => "checkbox",  
              "std" => "true"),    
              
                                     

          array( "name" => "Netvibes - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_netvibes",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                                   
                                 
                                 
          array( "name" => "Newsvine - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_Newsvine",  
              "type" => "checkbox",  
              "std" => "true"),         
              
         array( "name" => "Posterous - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_posterous",  
              "type" => "checkbox",  
              "std" => "true"),       
              
       array( "name" => "Reddit - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_reddit",  
              "type" => "checkbox",  
              "std" => "true"),         
              
       array( "name" => "Slashdot - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_slashdot",  
              "type" => "checkbox",  
              "std" => "true"), 
              
            array( "name" => "Email - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_email",  
              "type" => "checkbox",  
              "std" => "true"),               
              
        array( "name" => "Digg - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_digg",  
              "type" => "checkbox",  
              "std" => "true"),                       
                            
                  
              
       array( "name" => "Technorati - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_technorati",  
              "type" => "checkbox",  
              "std" => "true"),     
              
        array( "name" => "Yahoo - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_yahoo",  
              "type" => "checkbox",  
              "std" => "true"),                                                                                                                         
                                                                                                                                                                 
                                                                                                                                                      
              
      array( "name" => "Rss - Share this",  
              "desc" => "Turn ON/OFF the 'Share this' box",  
              "id" => $shortname."_portfoliopost_share_rss",  
              "type" => "checkbox",  
              "std" => "true"),  
       array(  "type" => "tab-close"), 
       
             array( "name" => "Images",  
            "type" => "tab"),   
               array( "name" => "You can adjust here the Image settings in your Portfolio templates. Leave fields blank for disabling the fixed height.",  
              "type" => "info"),               
              
        array( "name" => "Open Images in lightbox?",  
              "desc" => "Open portfolio images in lightbox?",  
              "id" => $shortname."_portfolio_lightbox",  
              "type" => "checkbox",  
              "std" => "true"),                     
              
        array( "name" => "Portfolio Single View",  
              "desc" => "Set the fixed height of images in portfolio single view. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_img_single",  
              "type" => "text",  
              "std" => "220"),                
                      
        array( "name" => "Portfolio",  
              "desc" => "Set the fixed height of images in portfolio template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_img",  
              "type" => "text",  
              "std" => "210"),  
              
        array( "name" => "Portfolio 2",  
              "desc" => "Set the fixed height of images in portfolio 2 template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_img2",  
              "type" => "text",  
              "std" => "160"),  
              
        array( "name" => "Portfolio 3",  
              "desc" => "Set the fixed height of images in portfolio 3 template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_img3",  
              "type" => "text",  
              "std" => "120"),                                
                      
                      
        array( "name" => "Portfolio Fullwidth",  
              "desc" => "Set the fixed height of images in portfolio fullwidth template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_fwd_img",  
              "type" => "text",  
              "std" => "230"),
              
        array( "name" => "Portfolio Fullwidth 2",  
              "desc" => "Set the fixed height of images in portfolio fullwidth 2 template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_fwd_img2",  
              "type" => "text",  
              "std" => "210"), 
              
        array( "name" => "Portfolio Fullwidth 3",  
              "desc" => "Set the fixed height of images in portfolio fullwidth 3 template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_fwd_img3",  
              "type" => "text",  
              "std" => "130"),     
              
        array( "name" => "Portfolio Fullwidth 4",  
              "desc" => "Set the fixed height of images in portfolio fullwidth 4 template. Leave blank if you don't want to use fixed height.",  
              "id" => $shortname."_portfolio_fwd_img4",  
              "type" => "text",  
              "std" => "120"),                                    
                                                                                   
                                            
     array(  "type" => "tab-close"), 
          
   array( "type" => "navigation-close"),       
           
  //////////////////////////////////////////////////////////////////////////////
  // CONTACT
  //////////////////////////////////////////////////////////////////////////////   
   array( "name" => "Contact Form",  
            "type" => "navigation", "icon" => "contact"),
     
   array( "name" => "General",
              "type" => "tab"),

       array( "name" => "Please insert here your Contact Info in order to have fully working Contact Form.",
              "type" => "info"),

       array( "name" => "Your E-Mail",
              "desc" => "Please insert your E-Mail Address",
              "id" => $shortname."_cf_yourmail",
              "type" => "text",
              "std" => ""),

       array( "name" => "Subject",
              "desc" => "Please insert the Subject of these E-Mails",
              "id" => $shortname."_cf_subject",
              "type" => "text",
              "std" => ""),

     array(  "type" => "tab-close"),
     
   array( "name" => "Security",
              "type" => "tab"),

       array( "name" => "Please insert here your Contact Info in order to have fully working Contact Form.",
              "type" => "info"),

        array( "name" => "Security question ?",
              "desc" => "Do you want to have a security question? It helps stop spam. Leave blank if you dont want this. For example: 5 + 1 = ?",
              "id" => $shortname."_cf_security_que",
              "type" => "text",
              "std" => "5 + 1 = ?"),

       array( "name" => "Answer to security question",
              "desc" => "If youser type this, your email will be sent",
              "id" => $shortname."_cf_security_answer",
              "type" => "text",
              "std" => "6"),

       array( "name" => "Fail to answer",
              "desc" => "If user failed with answering. For example: Email was unable to send, because you filled wrong security question.",
              "id" => $shortname."_cf_security_answer_fail",
              "type" => "text",
              "std" => "You didn't answer the security question correctly. Please try again."),
     array(  "type" => "tab-close"),
     

   
   array( "type" => "navigation-close"),
  
  //////////////////////////////////////////////////////////////////////////////
  // TRANSLATION
  //////////////////////////////////////////////////////////////////////////////   
 
       array( "name" => "Color Skin",  
            "type" => "navigation", "icon" => "color"),
            
      array( "name" => "Color Skin",  
              "type" => "tab"),
              
       array( "name" => "Please select Skin Color from the dropdown below to match with your business colors.",  
              "type" => "info"), 
              
       array( "name" => "Skin Color",  
              "desc" => "Select skin color",  
              "id" => $shortname."_color_skin",  
              "type" => "select",
              "options" => array("blue", "red", "green", "black", "blueviolet", "brown"),
              "std" => "blue"),
                
       array(  "type" => "tab-close"),   

   array( "type" => "navigation-close"),     
  
   array( "name" => "Translate",  
            "type" => "navigation", "icon" => "translate"),
            
array( "name" => "Posts",  
              "type" => "tab"),
       array( "name" => "In case you want to translate some hard coded texts in your Blog and Portfolio posts, you can do it here.",  
              "type" => "info"),  
              
                                     
      array( "name" => "'Read More' Text in Blog",  
        "desc" => "Insert here the text that will replace the standart 'Read more' text in Blog.",  
        "id" => $shortname."_translate_readmore",  
        "type" => "text",
        "std" => "(more...)"),     
        
      array( "name" => "'Read More' Button in Portfolio",  
        "desc" => "Insert here the text that will replace the standart 'Read more' text in Portfolio.",  
        "id" => $shortname."_translate_readmore_portfolio",  
        "type" => "text",
        "std" => "Read More"),        
        
          array( "name" => "'Related Posts' heading",  
        "desc" => "Insert here the text that will replace the standart 'Related Posts' text in single post.",  
        "id" => $shortname."_translate_related",  
        "type" => "text",
        "std" => "Related Posts"), 
        
              array( "name" => "'Popular Posts' heading",  
        "desc" => "Insert here the text that will replace the standart 'Popular Posts' text in single post.",  
        "id" => $shortname."_translate_popular",  
        "type" => "text",
        "std" => "Popular Posts"),    
        
        array( "name" => "'Share' - Blog",  
        "desc" => "Insert here the text that will replace the standart 'Share this' text in single blog post.",  
        "id" => $shortname."_translate_share_blog",  
        "type" => "text",
        "std" => "Share this"),      
        
        array( "name" => "'Share' - Portfolio",  
        "desc" => "Insert here the text that will replace the standart 'Share this' text in single portfolio post.",  
        "id" => $shortname."_translate_share_portfolio",  
        "type" => "text",
        "std" => "Share this"),      
        
        array( "name" => "'About the author' - Author box text",  
        "desc" => "Insert here the text that will replace the standart 'About the author' text in single post.",  
        "id" => $shortname."_translate_abox_about",  
        "type" => "text",
        "std" => "About the Author"), 
        
        array( "name" => "'Written by' - Author box text",  
        "desc" => "Insert here the text that will replace the standart 'Written by' text in single post.",  
        "id" => $shortname."_translate_abox_written",  
        "type" => "text",
        "std" => "Written by"), 
        
        array( "name" => "Date format",  
        "desc" => "Insert here the date format which you want to use. For specifications see 'date()' php function",  
        "id" => $shortname."_translate_date",  
        "type" => "text",
        "std" => "F j, Y"), 
		
       array( "name" => "No Comments - Post Meta",  
              "desc" => "No Comments - Post Meta",  
              "id" => $shortname."_com2_no",  
              "type" => "text",  
              "std" => "No Comments"),    
              
       array( "name" => "1 Comment - Post Meta",  
              "desc" => "1 Comment - Post Meta",  
              "id" => $shortname."_com2_1",  
              "type" => "text",  
              "std" => "1 Comment"),
              
              
      array( "name" => "% Comments - Post Meta",  
              "desc" => "% Comments - Post Meta",  
              "id" => $shortname."_com2_more",  
              "type" => "text",  
              "std" => "% Comments"),   

                
array(  "type" => "tab-close"),       
  //////////////////////////////////////////////////////////////////////////////
  // TRANSLATION - COMMENT FORM
  //////////////////////////////////////////////////////////////////////////////     
        array( "name" => "Comment Form",  
              "type" => "tab"),  
       
       array( "name" => "In case you want to translate some hard coded texts in Comments, you can do it here.",  
              "type" => "info"),  

       array( "name" => "Leave a Comment",  
              "desc" => "Leave a Comment",  
              "id" => $shortname."_com_leave",  
              "type" => "text",  
              "std" => "Leave a Comment"), 
              
       array( "name" => "No Comments",  
              "desc" => "No Comments",  
              "id" => $shortname."_com_no",  
              "type" => "text",  
              "std" => "No Comments to"),    
              
       array( "name" => "1 Comment",  
              "desc" => "1 Comment",  
              "id" => $shortname."_com_1",  
              "type" => "text",  
              "std" => "1 Comment to"),
              
              
      array( "name" => "% Comments",  
              "desc" => "% Comments",  
              "id" => $shortname."_com_more",  
              "type" => "text",  
              "std" => "% Comments to"),   
              
      array( "name" => "'Submit Comment' button name",  
              "desc" => "'Submit Comment' button name",  
              "id" => $shortname."_com_send",  
              "type" => "text",  
              "std" => "Submit Comment"),      
              
      array( "name" => "Comments are closed",  
              "desc" => "Comments are closed",  
              "id" => $shortname."_com_closed",  
              "type" => "text",  
              "std" => "Comments are closed"),                                                         
    
     array(  "type" => "tab-close"),             
	 	 	 
	 
  //////////////////////////////////////////////////////////////////////////////
  // TRANSLATION - SEARCH
  //////////////////////////////////////////////////////////////////////////////     
       array( "name" => "Search",  
              "type" => "tab"),  
       
       array( "name" => "In case you want to translate some hard coded texts in Search, you can do it here.",  
              "type" => "info"),  


              
       array( "name" => "'Enter keywords..' input",  
              "desc" => "'Enter keywords..' input",  
              "id" => $shortname."_srch_input_text",  
              "type" => "text",  
              "std" => "Enter keywords.."), 
              
      array( "name" => "No Posts Found",  
              "desc" => "No Posts Found",  
              "id" => $shortname."_srch_nopost",  
              "type" => "text",  
              "std" => "No Posts Found"),                   
                                    
    
     array(  "type" => "tab-close"), 
	 
	 
	    //////////////////////////////////////////////////////////////////////////////
  // TRANSLATION  - CONTACT FORM
  //////////////////////////////////////////////////////////////////////////////       
       array( "name" => "Contact",  
              "type" => "tab"),  
       
       array( "name" => "In case you want to translate some hard coded texts in Contact Form, you can do it here.",  
              "type" => "info"),  

       array( "name" => "Name",  
              "desc" => "Name",  
              "id" => $shortname."_cf_name",  
              "type" => "text",  
              "std" => "Name*"),   

       array( "name" => "E-Mail",  
              "desc" => "E-Mail",  
              "id" => $shortname."_cf_email",  
              "type" => "text",  
              "std" => "E-Mail*"),   

       array( "name" => "'Send' button name",  
              "desc" => "'Send' button name",  
              "id" => $shortname."_cf_send",  
              "type" => "text",  
              "std" => "Send E-Mail"),   
              
       array( "name" => "Message was successfully sent",  
              "desc" => "Message was successfully sent",  
              "id" => $shortname."_cf_send_ok",  
              "type" => "text",  
              "std" => "Message was successfully sent."),   
              
       array( "name" => "An error occured. Please try again later.",  
              "desc" => "An error occured. Please try again later.",  
              "id" => $shortname."_cf_send_ko",  
              "type" => "text",  
              "std" => "An error occured. Please try again later."),                               
                                                                  
     array(  "type" => "tab-close"),   

//////////////////////////////////////////////////////////////////////////////
// TRANSLATION  404 PAGE
//////////////////////////////////////////////////////////////////////////////       
/*       array( "name" => "404",  
              "type" => "tab"),  
       
       array( "name" => "404 Page appears when the requested URL doesnt exists. Here you should customize the 404 Page.",  
              "type" => "info"),  

       array( "name" => "Page Title",  
              "desc" => "Page Title",  
              "id" => $shortname."_404_title",  
              "type" => "text",  
              "std" => "Requested page not found"),   
                                                                                                      
       array( "name" => "Page Description",  
              "desc" => "Is located near under Page Title",  
              "id" => $shortname."_404_description",
              "type" => "text",  
              "std" => "Error 404"),

       array( "name" => "Page Content",  
              "desc" => "Page Content",  
              "id" => $shortname."_404_content",
              "type" => "text",  
              "std" => "Hello, something went wrong. The requested address doesn't exist."),
     array(  "type" => "tab-close"),

*/

   array( "type" => "navigation-close"),
   
      array( "name" => "Tracking Code",  
            "type" => "navigation", "icon" => "tracking"),
            
      array( "name" => "Tracking code",  
              "type" => "tab"),
              
       array( "name" => "Please insert the Tracking Code, e.g. Google Analytics",  
              "type" => "info"), 
              
       array( "name" => "Tracking Code",  
        "desc" => "Please insert the Tracking Code, e.g. Google Analytics",  
        "id" => $shortname."_tracking_analytics",  
        "type" => "text",  
        "std" => ""),                   
              
       array(  "type" => "tab-close"),   

   array( "type" => "navigation-close"),               
                              
   );
  //////////////////////////////////////////////////////////////////////////////
  // INIT FUNCTION
  //////////////////////////////////////////////////////////////////////////////    
  function freshpanel_add_init()
  {    
    $file_dir=get_bloginfo('template_directory');  
    if($_GET['page'] == 'functions.php')   {
        wp_enqueue_script("rm_script", $file_dir."/freshwork/freshpanel/js/controls.js", false, "1.0");
    wp_enqueue_script("rm_script", $file_dir."/freshwork/freshpanel/jquery.select.js", false, "1.0");
        wp_enqueue_style("functions", $file_dir."/freshwork/freshpanel/freshpanel.css", false, "1.0", "all"); }
        
    wp_enqueue_style("functionss", $file_dir."/freshwork/freshslider/freshslider.css", false, "1.0", "all");

   // wp_enqueue_script("rm_script", $file_dir."/freshwork/freshpanel/js/jquery.livequery.js", false, "1.0");
      wp_enqueue_script("rm_scripts", $file_dir."/freshwork/freshslider/js/control.js", false, "1.0");

  }
  
  //////////////////////////////////////////////////////////////////////////////
  // FRESHPANEL ADD FUNCTION
  ////////////////////////////////////////////////////////////////////////////// 
  function freshpanel_add_admin()
  {
    global $themename, $shortname, $options; 
    
    //if ( $_GET['page'] == basename(__FILE__) ) 
    {  
     
        
         if( 'freshpanel_reset' == $_REQUEST['reset'] ) {  
     
       foreach ($options as $value) {  
           delete_option( $value['id'] ); }  
     
     //  header("Location: admin.php?page=freshpanel.php&reset=true"); 
       }   
       else if ( 'freshpanel_save' == $_REQUEST['action'] ) {  
     //{
          /* foreach ($options as $value) {  
      //    echo $_REQUEST['st_checkbox1111']."sa";
           update_option( $value['id'], addslashes($_REQUEST[ $value['id'] ]) );
           
            }  */
     
       foreach ($options as $value) {  
           if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'],  ($_REQUEST[ $value['id'] ])  ); } else { delete_option( $value['id'] ); } }  
         
    //       header("Location: admin.php?page=freshpanel.php&saved=true");  
     //  die;  
         
      }
    
     /*  else if( 'reset' == $_REQUEST['action'] ) {  
         
           foreach ($options as $value) {  
               delete_option( $value['id'] ); }  
         
           header("Location: admin.php?page=zodiacbox.php&reset=true");  
       die;  
         
       }          */
   }
         

    
  }
  //////////////////////////////////////////////////////////////////////////////
  // FRESHPANEL CORE FUNCTION
  ////////////////////////////////////////////////////////////////////////////// 
  function freshpanel_admin()
  {
   global $themename, $shortname, $options;  
   $navigation_content ="";
   $tab_content = "";
   $navigation_counter = 0;
   $tab_counter= 0;
   $options_content = "";
   foreach ($options as $value) {  
 //    echo "xxxxxxx".get_option( $value['id'] ); 
      if (get_option( $value['id'] ) != "") $value['std'] =   get_option( $value['id'] );
      else
      {
        update_option( $value['id'],$value['std'] ); 
      }
      switch ( $value['type'] ) {        
        case "navigation":
          $tab_counter = 0;
          $style = ""; $selected = 'name="selected"';
   
          if($navigation_counter != 0) {$style = 'style="display:none;"'; $selected="";};
          $navigation_content .= '<li '.$selected.'>';
          $navigation_content .= '  <div class="passive" name="nav_'.$navigation_counter.'"></div>';
          $navigation_content .= '  <div class="active" '.$style.'></div>';
          $navigation_content .= '  <a href="javascript:" class="'.$value['icon'].'" >'.$value['name'].'</a>';
          $navigation_content .= '  <div class="active_arrow"></div>';
          $navigation_content .= '</li>';
          $tab_content .= '<ul class="tabs_wrapper" '.$style.' id="nav_'.$navigation_counter.'_tab">';   
          $options_content .= '<div class="box" id="nav_'.$navigation_counter.'_box" '.$style.' '.$selected.'>';    
        break;
        
        case "tab":
          $style = 'class="tab_active"'; $selected = 'name="selected"';
          $display = "";
          if($tab_counter != 0) {$style = 'class="tab_passive"'; $selected=""; $display='style="display:none;"';};
          $tab_content .= '<li '.$selected.'>';
          $tab_content .= '  <a href="javascript:" '.$style.' name="tab_'.$navigation_counter.'_'.$tab_counter.'">'.$value["name"].'</a>';
          $tab_content .= '</li>';
          $options_content .= '<div class="content_wrapper" id="tab_'.$navigation_counter.'_'.$tab_counter.'_wrapper" '.$display.' '. $selected . '>';  
        break;
   
        case "info":
          $options_content .= '<div class="intro_info">';
          $options_content .= '<img src="'.get_bloginfo('template_url').'/freshwork/freshpanel/gfx/info_big.png" alt="info" class="info_big" />';
          $options_content .= '<p>'.$value['name'].'</p>';
          $options_content .= '<img src="'.get_bloginfo('template_url').'/freshwork/freshpanel/gfx/divider.png" class="divider" alt="divider" />';
          $options_content .= '</div>';
          $options_content .= '<div class="content">';
          
        break;
        
        case "select":
          $select_content = "";
          foreach ($value['options'] as $select_options) {
            $select_content .=   '<li>'.$select_options.'</li>';
          }
          $options_content .= '
                            <div class="select">
                                <h2>'.$value['name'].'</h2>
                                <img src="'.get_bloginfo('template_url').'/freshwork/freshpanel/gfx/info_small.png" class="info_small" />
                                <p class="desc" style="display:none;">'.$value['desc'].'</p>
                                <div class="selectbox_wrapper">
                                    <input type="hidden" value="'.$value['std'].'" name="'.$value['id'].'" id="'.$value['id'].'">
                                    <div class="selected">'.$value['std'].'</div>
                                    <div class="select_options_wrapper">
                                      <div class="select_options_container">
                                            <ul class="select_options">
                                            '.$select_content.'
                                            </ul>
                                        </div>
                                        <div class="scrollbox">
                                            <div class="scrollbar_wrapper">
                                              <div class="scrollbar" name="0">
                                              </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="select_shadow"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div><!-- END "div.select" -->';

        break;
        

        case "checkbox":
          $options_content .= '<div class="switch">';
          $options_content .= '<h2>'.$value['name'].'</h2>';
          $options_content .= '<div class="btn_switch">';
          $options_content .= '<input type="hidden" class="btn_switch_input" name="'.$value['id'].'" id="'.$value['id'].'" value="'.$value['std'].'">';
          if($value['std']=="true") $options_content .= '<div class="on_off" style="left:0px"></div>';
          else $options_content .= '<div class="on_off"></div>';
          $options_content .= '<img src="'.get_bloginfo('template_url').'/freshwork/freshpanel/gfx/btn_switch_overlay.png" class="over" />';

          $options_content .= '</div><!-- END "div.btn_switch" -->';
          
					$options_content .= '<img src="'.get_bloginfo('template_url').'/freshwork/freshpanel/gfx/info_small.png" alt="info" class="info_small" />';
          $options_content .= '<p class="desc" style="display:none;">'.$value['desc'].'</p>';
					$options_content .= '</div><!-- END "div.switch" -->';
        break;
        

        
        case "text":
          $options_content .= '<div class="input">';
          $options_content .= '<h2>'.$value['name'].'</h2>';
          $options_content .= '<img src="'.get_bloginfo('template_url').'/freshwork/freshpanel/gfx/info_small.png" alt="info" class="info_small"/>';
          $options_content .= '<p class="desc" style="display:none;">'.$value['desc'].'</p>';
          $options_content .= '<input type="text" name="'.$value['id'].'" id="'.$value['id'].'" value="'.(stripslashes(($value['std']))).'">';
          $options_content .= '</div><!-- END "div.input" -->';
        break;
        
        case "reset":
          $options_content .= '<input type="submit" value="freshpanel_reset" class="btn_reset" name="reset" id="reset">';        
        break; 
        
        case "tab-close":
          $options_content .= '  <input name="save" type="submit" class="btn_save" value="" />  ';
          $options_content .= '<br /></div>';
          $options_content .= '</div>';
          $tab_counter++;
        break;  
   
        case "navigation-close":
          $tab_content .= '</ul>';
          $navigation_counter++;  
          $options_content .= '</div>';  
        break; 
                

      }    
   }  
  ?>
<img id="sneak_peak" style='position:absolute; z-index:999;'>
<div class="fresh_tooltip" style="position:absolute";>'.$value['desc'].'</div>
<div id="freshpanel">  
  <form method="post" action="?page=functions.php&action=freshpanel_save">
	<div id="wrapper_glogal">
    	<div class="wrapper_bg_outer">
            <div class="wrapper_bg">
                <div class="left">
                    <div class="logo"><img src="<?php echo get_bloginfo('template_url') ?>/freshwork/freshpanel/gfx/logo.png" alt="freshpanel logo" /></div>
                    <ul class="wrapper_nav">
                            <?php echo $navigation_content;?>
                    </ul><!-- END "ul.wrapper_nav" -->
                    <div class="shadow_bottom"></div>
                </div><!-- END "div.left" -->
                <div class="right">
                    <div class="header">
                        <div class="header_inner">
                        <?php if(get_option('st_fr_links') == "true" ){ ?>
                            <div class="links">
                                <h2>G'day admin!</h2>
                                <p><a href="http://themeforest.net/item/showtime-business-and-portfolio-wordpress-theme/117367?ref=freshface" target="_blank" class="btn_small">TF Item Page</a></p>
                                <p><a href="http://themeforest.net/item/showtime-business-and-portfolio-wordpress-theme/117367?ref=freshface" target="_blank" class="btn_small">Check for newer version</a></p>
                                <p><a href="<?php echo get_bloginfo('template_url');?>/help/" target="_blank" class="btn_small">Documentation</a></p>
                            </div><!-- END "div.links" -->
                        <div class="fresh_items">
                            <h2>Browse my themes:</h2>
                            <div class="fresh_themes_wrapper">
								<?php 
									/* gets the data from a URL */
									if( function_exists  (  'curl_init'  ) )
									{
									  $fresh_url = 'http://freshface.cz/freshpanel/mythemes.php';
									$ch = curl_init();
									$timeout = 5;
									curl_setopt($ch,CURLOPT_URL,$fresh_url);
									curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
									curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
									$fresh_data = curl_exec($ch);
									curl_close($ch);
									echo $fresh_data;
									}      
								?>
                            </div><!-- END "div.fresh_themes_wrapper" -->
                            <div class="button_wrapper">
                                <p><a href="http://themeforest.net/user/freshface/portfolio?ref=freshface" target="_blank" class="btn_small">Browse all</a></p>
                                <p><a href="http://www.freshface.net/fffp-lcp/" target="_blank" class="btn_small">Visit my Blog</a></p>
                                <div class="btn_nav">
                                    <div class="btn_nav_left"></div>
                                    <div class="btn_nav_right"></div>
                                </div>
                            </div><!-- END "div.button_wrapper" -->
                        </div><!-- END "div.fresh_items" -->
                        <?php } ?>
                    </div><!-- END "div.header_inner" -->
                       <?php echo $tab_content; ?>
                    </div><!-- END "div.header" -->
                    <?php echo $options_content; ?>
    
                </div><!-- END "div.right" -->
                <div class="clear"></div>
            </div><!-- END "div.wrapper_bg" -->
        </div><!-- END "div.wrapper_bg_outer" -->
	</div>
    <!-- END "div#wrapper_glogal" --><div class="theme_version"><?php
        $theme_data = get_theme_data(get_stylesheet_uri());
        echo $theme_data['Name'];
    ?></div>
    </form>
</div><!-- END "div#freshpanel" -->
  <?php
  }
  //////////////////////////////////////////////////////////////////////////////
  // ACTIONS
  ////////////////////////////////////////////////////////////////////////////// 
  add_action('admin_init', 'freshpanel_add_init');  
  add_action('admin_menu', 'freshpanel_add_admin');         
 
 
 if ( is_admin() && isset($_GET['activated'] ) && $pagenow == "themes.php" && get_option('ff_theme_was_activated') !="true") {
           foreach ($options as $one_option)
     {
     	  if( get_option( $one_option['id'] ) != '' ) continue;
         if($one_option['id'] != '') update_option( $one_option['id'], htmlspecialchars_decode ($one_option['std']) );
     }
 }
?>

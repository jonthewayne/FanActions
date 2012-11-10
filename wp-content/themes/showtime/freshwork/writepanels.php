<?php
////////////////////////////////////////////////////////////////////////////////
// PAGE WRITE PANELS
////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////////////
// ACTIONS
////////////////////////////////////////////////////////////////////////////////
  add_action('admin_menu', 'create_meta_box');  
  add_action('save_post', 'save_postdata');  
  
  /* register and create meta boxes for pages */
  function create_meta_box() {
    global $theme_name;
      if ( function_exists('add_meta_box') ) {
        add_meta_box( 'page-writepanels-new', 'Page settings', 'page_writepanels', 'page', 'normal', 'high' );
        add_meta_box( 'page-writepanels-new', 'Portfolio settings', 'portfolio_writepanels', 'portfolio', 'normal', 'high' );
        add_meta_box( 'page-writepanels-new', 'Post settings', 'post_writepanels', 'post', 'normal', 'high' );
      } // end(if)
  } // end(create_meta_box)
  
  /* save post data here */
  function save_postdata( $post_id ) {
    
   // if ($_POST['post_type'] ==  'page' || )
    {
    //echo 'dsdsds';
         global $post, $page_write_panel, $post_write_panel, $portfolio_write_panel;
        if ($_POST['post_type'] ==  'page') $post_write_panel = $page_write_panel;
        else if ($_POST['post_type'] ==  'portfolio'){ $post_write_panel = $portfolio_write_panel;}
        foreach($post_write_panel as $meta_box) {
        if($meta_box['type'] != "divider"){
        // Verify
     /*   if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
        return $post_id;
        }    */
      /*  
        if ( 'post' == $_POST['post_type'] ) {
          if ( !current_user_can( 'edit_page', $post_id ))
          return $post_id;
        } else {
        if ( !current_user_can( 'edit_post', $post_id ))
        return $post_id;
        }   */
 
        
        $data = $_POST[$meta_box['name']];
        $data = addslashes(stripslashes(($data)));
      //  if($meta_box['name'] == 'Description')
//            $data = htmlentities($data);
        if(get_post_meta($post_id, $meta_box['name']) == "")
        add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
        update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
        delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
        }
        }
     }
  } // end(save_postdata)
// ARRAYS
 $page_write_panel =
 array(
 "Description" => array(
 "name" => "Description",
 "std" => "",
 "title" => "Description",
 "description" => "Description under site title")
 
 );
 
  $portfolio_write_panel =
 array(

 
 "video_code" => array(
 "name" => "video_code",
 "std" => "",
 "title" => "Video link",
 "description" => "Link to your video, e.g. youtube, vimeo... Leave blank if you want to open image in lightbox"),
 
 "read_more" => array(  
  "name" => "read_more",  
  "std" => "true",  
  "title" => "'Read More' button",  
  "type" => "checkbox",
  "description" => "Display 'Read More' button?"),
  
  "fullwidth" => array(  
  "name" => "fullwidth",  
  "std" => "false",  
  "title" => "Fullwidth Single template?",  
  "type" => "checkbox",
  "description" => "Display single post with Fullwidth template?")

 
 );

 $post_write_panel =  
   array(  
   "PAGE SETINGS" => array(  
   "name" => "POST SETTINGS",  
   "type" => "divider"),
   
  "fullwidth" => array(  
  "name" => "fullwidth",  
  "std" => "false",  
  "title" => "Fullwidth Single template?",  
  "type" => "checkbox",
  "description" => "Display single post with Fullwidth template?")
   );
   
// HTML DRAWING
  
  function portfolio_writepanels() {
    global $post, $portfolio_write_panel;
  
    foreach($portfolio_write_panel as $meta_box) {  // we'r going through all values
      $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);
  
      if($meta_box_value == "") $meta_box_value = $meta_box['std']; // if is empty, insert standart value
      $meta_box_value = stripslashes($meta_box_value);
      
      // html structure
      if($meta_box["type"] == "divider");// echo '<h1>'.$meta_box['name'].'</h1>';

      else
      {
          echo '<div id="'.$meta_box['name'].'_div">';
          echo'<input type="hidden"  name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
          echo'<h2>'.$meta_box['title'].'</h2>';
          if($meta_box['type'] == "textarea")     // TEXTAREA
          {
            echo '<textarea name="'.$meta_box['name'].'" size="55" width="400px" />'.$meta_box_value.'</textarea><br />';
          }
              else if($meta_box['type'] == "checkbox")
            {
               echo '<select name="'.$meta_box['name'].'" id="'.$meta_box['name'].'">';
               if($meta_box_value == "true" )
               {
                echo   '<option value="true" selected>yes</option>';
                echo   '<option value="false" >no</option>';
               
               }
               else
               {
                echo   '<option value="true"  >yes</option>';
                echo   '<option value="false" selected>no</option>';
               }
              
               echo '</select>';
            
              // echo'<input type="checkbox" name="'.$meta_box['name'].'" value="ssss" checked size="55" /><br />';
                }
          else                                    // TEXT
          {
            echo'<input type="text" id="'.$meta_box['name'].'" name="'.$meta_box['name'].'" value="'.$meta_box_value.'" size="55" /><br />';
          }
          echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
          echo '</div>';
        
      }// end(else)
    }  // END FOREACH
  }    // end(page_writepanels_new)

  
  
  function page_writepanels() {
    global $post, $page_write_panel;
  
    foreach($page_write_panel as $meta_box) {  // we'r going through all values
      $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);
  
      if($meta_box_value == "") $meta_box_value = $meta_box['std']; // if is empty, insert standart value
      $meta_box_value = ($meta_box_value);
      
      // html structure
      if($meta_box["type"] == "divider");// echo '<h1>'.$meta_box['name'].'</h1>';

      else
      {
          echo '<div id="'.$meta_box['name'].'_div">';
          echo'<input type="hidden"  name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
          echo'<h2>'.$meta_box['title'].'</h2>';
          if($meta_box['type'] == "textarea")     // TEXTAREA
          {
            echo '<textarea name="'.$meta_box['name'].'" size="55" width="400px" />'.$meta_box_value.'</textarea><br />';
          }
              else if($meta_box['type'] == "checkbox")
            {
               echo '<select name="'.$meta_box['name'].'" id="'.$meta_box['name'].'">';
               if($meta_box_value == "true" )
               {
                echo   '<option value="true" selected>yes</option>';
                echo   '<option value="false" >no</option>';
               
               }
               else
               {
                echo   '<option value="true"  >yes</option>';
                echo   '<option value="false" selected>no</option>';
               }
              
               echo '</select>';
            
              // echo'<input type="checkbox" name="'.$meta_box['name'].'" value="ssss" checked size="55" /><br />';
                }
          else                                    // TEXT
          {
            if($meta_box['name'] == 'Description')
            $meta_box_value =  (($meta_box_value));
            echo'<input type="text" id="'.$meta_box['name'].'" name="'.$meta_box['name'].'" value="'.$meta_box_value.'" size="55" /><br />';
          }
          echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
          echo '</div>';
        
      }// end(else)
    }  // END FOREACH
  }    // end(page_writepanels_new)

  
  function post_writepanels() {
    global $post, $post_write_panel, $page_write_panel;
    //if ($_POST['post_type'] ==  'page') $post_write_panel = $page_write_panel;
    foreach($post_write_panel as $meta_box) {  // we'r going through all values
      $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);
  
      if($meta_box_value == "") $meta_box_value = $meta_box['std']; // if is empty, insert standart value
      $meta_box_value = stripslashes($meta_box_value);
      
      // html structure
      if($meta_box["type"] == "divider");// echo '<h1>'.$meta_box['name'].'</h1>';

      else
      {
          echo '<div id="'.$meta_box['name'].'_div">';
          echo'<input type="hidden"  name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
          echo'<h2>'.$meta_box['title'].'</h2>';
          if($meta_box['type'] == "textarea")     // TEXTAREA
          {
            echo '<textarea name="'.$meta_box['name'].'" size="55" width="400px" />'.$meta_box_value.'</textarea><br />';
          }
              else if($meta_box['type'] == "checkbox")
            {
               echo '<select name="'.$meta_box['name'].'" id="'.$meta_box['name'].'">';
               if($meta_box_value == "true" )
               {
                echo   '<option value="true" selected>yes</option>';
                echo   '<option value="false" >no</option>';
               
               }
               else
               {
                echo   '<option value="true"  >yes</option>';
                echo   '<option value="false" selected>no</option>';
               }
              
               echo '</select>';
            
              // echo'<input type="checkbox" name="'.$meta_box['name'].'" value="ssss" checked size="55" /><br />';
                }
          else                                    // TEXT
          {
            echo'<input type="text" id="'.$meta_box['name'].'" name="'.$meta_box['name'].'" value="'.$meta_box_value.'" size="55" /><br />';
          }
          echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
          echo '</div>';
        
      }// end(else)
    }  // END FOREACH
  }    // end(page_writepanels_new)

?>

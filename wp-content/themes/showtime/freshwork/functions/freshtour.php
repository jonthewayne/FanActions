<?php
  //////////////////////////////////////////////////////////////////////////////
  // INIT FUNCTION
  //////////////////////////////////////////////////////////////////////////////  
  $step  = 1;
  if( isset($_POST['prc_step']) ) $step = $_POST['prc_step'];
  
  function tour_add_init()
  {    

   
  }
  
  //////////////////////////////////////////////////////////////////////////////
  // FRESHPANEL ADD FUNCTION
  ////////////////////////////////////////////////////////////////////////////// 
  function tour()
  {
    global $step;
   // echo 'dsdsds';
  // step 1
   if($step == 1)
   {    
   ?>
  <div class="wrap">
   <h2>Take a Tour Page Generator</h2>
	<br /><br />
   <form method="post">
    <input id="prc_pages" name="prc_pages" value=3> How many sub-pages you want?<br>
    <input type="submit" value="Next Step" style="margin:15px 0;">
    
    <input type="hidden" name="prc_step" value="2">
   </form>
   </div>
   <?php
   }
   else if($step == 2)
   {
   $pages = $_POST['prc_pages'];
 
   if($pages == '') $pages =1;
   ?>
   <form method="post">
  <div class="wrap">
   <h2>Insert your data into the boxes and click 'Generate'</h2>
  <table cellspacing="20px" style="margin:0 0 0 -20px;"> 
  <tr>
    <td> <input type="text" name="prc_title" style="width:300px; margin-bottom:23px;"><label style="padding:4px 4px 9px 7px;">Tour Navigation Title</label> </td>
    
  </tr>
<?php
  for($r = 1; $r <= $pages; $r++)
  {
    echo '<tr>';

        echo '<td style="border:1px solid #CCC; background:#EEE; padding:10px; margin-bottom:23px;">';
          echo '<input type="text" style="width:310px; margin-bottom:5px;" name="i_r'.$r.'"><label style="padding:4px 4px 9px 7px;">Sub-Page Navigation Title</label><br>';  
          echo '<textarea style="width:500px; height:400px;" name="ta_r'.$r.'"></textarea>';      
        echo '</td>';

    echo '</tr>';      
  }
?>
  </table>
    <input type="submit" value="Generate the code" style="margin:15px 0;">
    
    <input type="hidden" name="prc_step" value="3">
    <input type="hidden" name="prc_pages" value="<?php echo $pages; ?>">
   </form>   
  </div>

   <?php   
   }
   else if($step==3)
   {
   $pages = $_POST['prc_pages']; 
   if($pages == '') $pages =1;
   
    $output = '<div id="tour">';
    $nav = '<ul id="tour_nav"><li class="tour_nav_name">'.stripslashes($_POST['prc_title']).'</li>';
    $slide = '<div id="tour_slider">';   
    
    for($p = 1; $p<=$pages; $p++)
    {
      $title = $_POST['i_r'.$p];
      $content_slide = $_POST['ta_r'.$p];
      
      $title = stripslashes( $title );// str_replace( array('"',"'"), array('&quot;', '&apos;'), $title );
      $content_slide =stripslashes( $content_slide );// str_replace( array('"',"'"), array('&quot;', '&apos;'), $content_slide );
      if($p ==1)
      {
         $nav .= '<li><a href="" rel="'.$p.'" class="tour_nav_active">'.$title.'</a></li>';
         $content .=  '<li style="">'.$content_slide;
         
         $content .='<div class="tour_pagenavi">
                <a href="" class="tour_pagenavi_right" rel="'.($p+1).'">'.stripslashes($_POST['i_r'.($p+1)]).' &rarr;</a>
            </div></li>';
      }
      else
      {
		 if($p == $pages)
        	$nav .= '<li><a href="" class="tour_nav_last" rel="'.$p.'">'.$title.'</a></li>';		 
		 else
        	$nav .= '<li><a href="" rel="'.$p.'">'.$title.'</a></li>';
        $content .=  '<li style=" height:7px;">'.$content_slide;
        $content .='<div class="tour_pagenavi">';
        $content .= '<a href="" class="tour_pagenavi_left" rel="'.($p-1).'">&larr;'.stripslashes($_POST['i_r'.($p-1)]).'</a>';
        if(($p+1)<= $pages )
          $content .='<a href="" class="tour_pagenavi_right" rel="'.($p+1).'">'.stripslashes($_POST['i_r'.($p+1)]).' &rarr;</a>';
        $content .= '</div></li>';
      }
    }  
    $output .= $nav.'</ul><div id="tour_slider"><ul>'.$content.'</ul></div><div class="clear"></div></div>';
	echo '	<div class="wrap"><h2>Now copy and paste this code into your fullwidth page</h2>';
	echo '<textarea cols=80 rows=20>'.$output.'</textarea>';
	echo '<br />* This code is supported only in fullwidth page';
   }
  }
  function tour_add_admin()
  {

  

    //add_menu_page('Take a Tour - Generator', 'FreshTour', 'administrator', basename(__FILE__), 'tour');    
  }

  
  
  //////////////////////////////////////////////////////////////////////////////
  // ACTIONS
  ////////////////////////////////////////////////////////////////////////////// 
  add_action('admin_init', 'tour_add_init');  
  add_action('admin_menu', 'tour_add_admin');         
 
?>

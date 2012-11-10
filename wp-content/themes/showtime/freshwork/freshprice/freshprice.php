<?php
  //////////////////////////////////////////////////////////////////////////////
  // INIT FUNCTION
  //////////////////////////////////////////////////////////////////////////////  
  $step  = 1;
  if( isset($_POST['prc_step']) ) $step = $_POST['prc_step'];
  
  function price_add_init()
  {    

    wp_enqueue_script("rm_script", $file_dir."/freshwork/freshslider/js/control.js", false, "1.0");
   
  }
  
  //////////////////////////////////////////////////////////////////////////////
  // FRESHPANEL ADD FUNCTION
  ////////////////////////////////////////////////////////////////////////////// 
  function pricing_table()
  {
    global $step;
   // echo 'dsdsds';
  // step 1
   if($step == 1)
   {    
   ?>
   <div class="wrap">
   <h2>Pricing Table Generator</h2>
   <form method="post">
    <input id="prc_column" name="prc_column" value=3> Columns <br>
    <input id="prc_rows" name="prc_row" value=5> Rows <br>
    <input type="submit" value="Next Step" style="margin:15px 0;">
    
    <input type="hidden" name="prc_step" value="2">
   </form>
   </div>
   <?php
   }
   else if($step == 2)
   {
   $row = $_POST['prc_row'];
   $column = $_POST['prc_column'];
   
   if($row == '') $row =1;
   if($column == '') $column = 1;
   ?>
	<div class="wrap">
       <h2>Insert your data to the table and click 'Generate'</h2>
    
       <form method="post">
      <table>
    <?php
      for($r = 1; $r <= $row; $r++)
      {
        echo '<tr>';
          for($c = 1; $c <= $column; $c++)
          {
            echo '<td>';
              echo '<textarea name="ta_r'.$r.'_c'.$c.'"></textarea>';        
            echo '</td>';
          }  
        echo '</tr>';      
      }
    ?>
      </table>
        <input type="submit" value="Generate the code" style="margin:15px 0;">
        
        <input type="hidden" name="prc_step" value="3">
        <input type="hidden" name="prc_column" value="<?php echo $column; ?>">
        <input type="hidden" name="prc_row" value="<?php echo $row; ?>">
       </form>   
   </div>
   <?php   
   }
   else if($step==3)
   {
    $output = '<table id="pricing_table">';
    
    $row = $_POST['prc_row'];
    $column = $_POST['prc_column'];
    
    for($r = 1; $r <= $row; $r++)
    {
        if ($r == 1) $output .= '<tr>';
        if($r ==2) $output .= '<tr class="row_price">';
        else if($r>2){
        if ($r%2 == 0)
            $output .= '<tr class="row_even">';
        else $output .= '<tr class="row_odd">';}
        for($c = 1; $c <= $column; $c++)
        {
          $txt_value = stripslashes($_POST['ta_r'.$r.'_c'.$c]);
          if($r == 1)
          {
            if($c == 1) $output .= '<td class="col_left"></td>';
            else if($c == 2) $output .= '<td class="col_name col_first">'.$txt_value.'</td>';
            else if($c == $column) $output .= '<td class="col_name col_last">'.$txt_value.'</td>';
            else $output .= '<td class="col_name">'.$txt_value.'</td>';
          }
          else if($r ==2)
          {
            if($c == 1) $output .= '<td class="col_left"></td>';
            else $output .= '<td class="col_price">'.$txt_value.'</td>';
          }
          else if($r == $row)
          {
            if($c == 1) $output .='<td class="col_left row_last"></td>';
            else $output .='<td class="row_last">'.$txt_value.'</td>';
          }
          else
          {
            if($c ==1) $output .= '<td class="col_left">'.$txt_value.'</td>';  
            else $output .= '<td>'.$txt_value.'</td>'; 
          }
        } 
        $output .= '</tr>'; 
    
    }
    $output .= '</table>';
	echo '	<div class="wrap"><h2>Now copy and paste this code into your post or page</h2>';
    echo '<textarea cols=80 rows=20>'.$output.'</textarea>';
	echo '</div>';
   }
  }
  function price_add_admin()
  {

  

   
  }

  
  
  //////////////////////////////////////////////////////////////////////////////
  // ACTIONS
  ////////////////////////////////////////////////////////////////////////////// 
  add_action('admin_init', 'price_add_init');  
  add_action('admin_menu', 'price_add_admin');         
 
?>

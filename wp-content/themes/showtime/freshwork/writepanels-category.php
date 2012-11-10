<?php
////////////////////////////////////////////////////////////////////////////////
//  DEFINE CATEGORY TEMPLATES
////////////////////////////////////////////////////////////////////////////////
$cat_templates = array('blog', 'portfolio', 'portfolio2','portfolio3', 'portfolio-fullwidth', 'portfolio-fullwidth-2', 'portfolio-fullwidth-3', 'portfolio-fullwidth-4');
$cat_orderby = array('default', 'title', 'date', 'ID', 'author', 'modified', 'comment_count', 'parent');
$cat_order = array('ASC', 'DESC');
add_action('add_category_form', 'fresh_category_form');
add_action('edit_category_form', 'fresh_category_form');
add_action('create_category','fresh_edit_category');
add_action('edit_category','fresh_edit_category');

function fresh_edit_category($ID)
{
  if(isset($_POST['page_template']))
  {
    update_option($ID.'-cat_template', $_POST['page_template']);
    update_option($ID.'-cat_posts', $_POST['posts_per_page']);
    update_option($ID.'-cat_orderby', $_POST['orderby']);
    update_option($ID.'-cat_order', $_POST['order']);
  }
  //update_option('cat_option_pico', $ID);
}


function fresh_category_form()
{
  global $cat_templates, $cat_orderby,$cat_order;
 // echo $_GET['tag_ID']. 'dsdsds';
   $actual_selected = get_option($_GET['tag_ID'].'-cat_template');
   $order_by = get_option($_GET['tag_ID'].'-cat_orderby');
   $order = get_option($_GET['tag_ID'].'-cat_order');
   if($order_by =="")$order_by = "default";
   if($actual_selected =="")$actual_selected = "blog";
   if($order =="")$order = "DESC";  
   
   $posts_per_page = get_option($_GET['tag_ID'].'-cat_posts');
   if($posts_per_page =="" ) $posts_per_page = 5;
?>
    <table class="form-table">
    <tr class="form-field">
			<th scope="row" valign="top"><label for="description">Page template</label></th>
			<td>		<select name='page_template' id='page_template' class='postform' >
			
			<option value='<?php echo $actual_selected; ?>'><?php echo $actual_selected; ?></option>
			<?php 
			
			foreach($cat_templates as $cat_temp)
			{
			 if($actual_selected != $cat_temp)
        echo '<option class="level-0" value="'.$cat_temp.'">'.$cat_temp.'</option>';
      }
    	
    	
    	?>
    </select>

			<span class="description"></span></td>
		</tr>
    </table>
    
        <table class="form-table">
    <tr class="form-field">
			<th scope="row" valign="top"><label for="description">Posts per page</label></th>
			<td><input name='posts_per_page' id='posts_per_page' value='<?php echo $posts_per_page; ?>'>

			<span class="description"></span></td>
		</tr>
    </table>
    
    <table class="form-table">
    <tr class="form-field">
			<th scope="row" valign="top"><label for="description">Order by</label></th>
			<td>		<select name='orderby' id='orderby' class='postform' >
			
			<option value='<?php echo $order_by; ?>'><?php echo $order_by; ?></option>
			<?php 
			
			foreach($cat_orderby as $cat_temp)
			{
			 if($order_by != $cat_temp)
        echo '<option class="level-0" value="'.$cat_temp.'">'.$cat_temp.'</option>';
      }
    	?>
    </select>

			<span class="description"></span></td>
		</tr>
    </table>   
    
    <table class="form-table">
    <tr class="form-field">
			<th scope="row" valign="top"><label for="description">Order</label></th>
			<td>		<select name='order' id='order' class='postform' >
			
			<option value='<?php echo $order; ?>'><?php echo $order; ?></option>
			<?php 
			
			foreach($cat_order as $cat_temp)
			{
			 if($order != $cat_temp)
        echo '<option class="level-0" value="'.$cat_temp.'">'.$cat_temp.'</option>';
      }
    	?>
    </select>

			<span class="description"></span></td>
		</tr>
    </table>         
<?php
}
?>

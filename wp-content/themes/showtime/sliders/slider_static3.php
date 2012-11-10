       
<?php
  global $wpdb;
  $table_name = $wpdb->prefix.'fresh_slider';
  $result = mysql_query("SELECT * FROM $table_name ORDER BY img_order ASC");
  $img_count = mysql_num_rows($result);
    $row = mysql_fetch_array($result); 
   $prettyPhoto = 'rel="prettyPhoto[gallery]"';
  if($row['lightbox'] != 1) $prettyPhoto = '';
?>

  

        <div class="slider_static2">
            <div class="static2_desc">
            	<h2><?php echo $row['alt']; ?></h2>
                  <?php echo $row['description']; ?>
            </div>
            <a href="<?php echo $row['link_url']; ?>" <?php echo $prettyPhoto;?> class="static2_image"><img class="static2_image" src="<?php echo $row['image_url']; ?>" /></a>
            <div class="clear"></div>
        </div><!-- END "div.slider_static2" -->

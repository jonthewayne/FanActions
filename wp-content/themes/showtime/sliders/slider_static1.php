       
<?php
  global $wpdb;
  $table_name = $wpdb->prefix.'fresh_slider';
  $result = mysql_query("SELECT * FROM $table_name ORDER BY img_order ASC LIMIT 1");
  $img_count = mysql_num_rows($result);
  $row = mysql_fetch_array($result);
  $prettyPhoto = 'rel="prettyPhoto[gallery]"';
  if($row['lightbox'] != 1) $prettyPhoto = '';
?>

  <img src="<?php echo get_bloginfo('template_url');?>/gfx/intro_text.png" class="intro_text" alt="Show them your work or product!" />
        <p class="intro_desc"><?php echo $row['description']; ?></p>

        <div class="slider_static1">
			<a href="<?php echo $row['link_url']; ?>" <?php echo $prettyPhoto; ?> class="static1_image"><img class="static1_image" src="<?php echo $row['image_url']; ?>" /></a>
        </div><!-- END "div.slider_static1" -->

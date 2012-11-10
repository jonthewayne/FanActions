
<?php
  global $wpdb;
  $table_name = $wpdb->prefix.'fresh_slider';
  $result = mysql_query("SELECT * FROM $table_name ORDER BY img_order ASC");
  $img_count = mysql_num_rows($result);
?>
        <div id="slider_fresh">

            
                   
        </div><!-- END "div.slider_fresh" -->

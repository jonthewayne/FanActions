       
<?php
  global $wpdb;
  $table_name = $wpdb->prefix.'fresh_slider';
  $result = mysql_query("SELECT * FROM $table_name ORDER BY img_order ASC");
  $img_count = mysql_num_rows($result);
?>

  <img src="<?php echo get_bloginfo('template_url');?>/gfx/intro_text.png" class="intro_text" alt="Show them your work or product!" />
        <p id="slider_3d_desc" class="intro_desc"><?php echo get_option('st_msga_title'); ?></p>

        <div class="slider_3d">

        <?php 
          $img_id = 1;
          while($row = mysql_fetch_array($result))
          {
           if($img_id==1) echo '<div class="slider_3d_c">';
           else if($img_id==2) echo '<div class="slider_3d_r1">';
           else if($img_id==3) echo '<div class="slider_3d_r2">';
           else if($img_id==($img_count-1)) echo '<div class="slider_3d_l2">';
           else if($img_id==$img_count) echo '<div class="slider_3d_l1">';  
           else echo '<div class="slider_3d_none">';  
            echo '<span style="display:none;" class="'.$row['lightbox'].'" title="'.$row['description'].'">'.$row['link_url'].'</span>';
           // image_url
            echo '<img src="'.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$row['image_url'].'&amp;w=366&amp;h=226&amp;zc=1" alt="'.$row['alt'].'" />'; 
        //    echo 

           echo '</div>';
           $img_id++;
          }
        ?>
            
                   
        </div><!-- END "div.slider_3d" -->

<?php
////////////////////////////////////////////////////////////////////////////////
// SLIDER CODE
////////////////////////////////////////////////////////////////////////////////
?>
<?php
  global $wpdb;
  $table_name = $wpdb->prefix.'fresh_slider';
  $result = mysql_query("SELECT * FROM $table_name ORDER BY img_order ASC");
  $img_count = mysql_num_rows($result);
  $img_size = 960 / $img_count;
  $min_space = 45;
  $img_width = 960 - ($img_count-1)*$min_space;
?>

<div class="slider_shadow">
        <div id="slider_paralel">
        
          <?php 
          $img_id = 1;
          while($row = mysql_fetch_array($result))
          {
          //360 * 960
          $rel = 'true"';
          if($row['lightbox'] != 1) $rel = 'false';
          //if($row['link_url'] != ''){ echo '<a href="'.$row['link_url'].'" '.$rel.' >';  }   
           echo '<div class="paralel_item" style="width:'.$img_size.'px">';  
         //   echo '<span style="display:none;" class="'.$row['lightbox'].'">'.$row['link_url'].'</span>';
           // image_url
            echo '<img src="'.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$row['image_url'].'&amp;w='.($img_width+5).'&amp;h=360&amp;zc=1" alt="'.$row['alt'].'" class="paralel_image" />'; 
            echo '  
              <span class="slide_shadow" ></span>          
              <h4 class="paralel_s">
              '.$row['alt'].'
              </h4>
              <span class="paralel_b">
              <h4 class="paralel_b_title">'.$row['alt'].'</h4>
              <span class="paralel_b_desc">'.$row['description'].'</span>
              <p class="paralel_link" style="display:none;" title="'.$rel.'">'.$row['link_url'].'</p>
              </span>
            ';
        //    echo 

           echo '</div>';
           // if($row['link_url'] != '') {echo '</a>';}
           $img_id++;
          }
        ?>
        
       
        </div>
</div>
<?php 
////////////////////////////////////////////////////////////////////////////////
// END SLIDER CODE
////////////////////////////////////////////////////////////////////////////////
?>


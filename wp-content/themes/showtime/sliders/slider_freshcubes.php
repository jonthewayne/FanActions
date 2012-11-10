<div class="slider_shadow">
<?php
  global $wpdb;
  $table_name = $wpdb->prefix.'fresh_slider';
  $result = mysql_query("SELECT * FROM $table_name  ORDER BY img_order ASC");
  $r2 = mysql_query("SELECT * FROM $table_name ORDER BY img_order ASC LIMIT 1");
  $r2r = mysql_fetch_array($r2);
      
  $img_count = mysql_num_rows($result);
?>
        <div id="slider_freshcubes" style="background-image: url('<?php echo get_bloginfo('template_url').'/scripts/timthumb.php?src='.$r2r['image_url'].'&amp;w=960&amp;h=360&amp;zc=1'; ?>')">
<?php


$c_w = 120;
$c_h = 120;
for($w =0; $w < 8; $w++)
{
  for($h=0; $h <3; $h++)
  {
    echo '<div class="fresh_cube" id="fresh_cube_'.$w.'_'.$h.'" style="left:'.($w*120).'px; top:'.($h*120).'px; background-position:'.($w*-120).'px '.($h*-120).'px; background-image: url(\''.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$r2r['image_url'].'&amp;w=960&amp;h=360&amp;zc=1\');"></div>';
  }
}
?>
            
               
          <ul id="fresh_cube_data">
            <?php
            $id_object = 0;
            while($row = mysql_fetch_array($result))
            {
              echo '<li class="fresh_cube_image_'.$id_object.'" >';
              echo  '<img src="'.get_bloginfo('template_url').'/scripts/timthumb.php?src='.$row['image_url'].'&amp;w=960&amp;h=360&amp;zc=1" />';//echo '<span class="img_src">'.$row['image_url'].'</span>';                            
              echo  '<span class="transition" title="'.$row['transition'].'"><h4 class="slide_title">'.$row['alt'].'</h4><p>'.$row['description'].'</p></span>';
              echo '<span class="lightbox" title="'.$row['lightbox'].'">'.$row['link_url'].'</span>';
              echo '</li>';
              $id_object++;
            }
            ?>
          </ul>
		  <div class="slide_left"></div>
		  <div class="slide_right"></div>
          <div class="slide_info">
          <div class="slide_desc">
          	<h4 class="slide_title"><?php echo $r2r['alt']; ?></h4>
            <p><?php echo $r2r['description']; ?></p>
          </div>
            <ul id="fresh_cube_nav_wrapper">
              <li class="active" title="0"></li>
              <?php 
              for($j = 1; $j < $img_count; $j++)
              {
              
                echo '<li title="'.$j.'"></li>';    
              }
                  

              ?>
		        </ul>   
          
          </div>
        </div><!-- END "div.slider_fresh" -->
  </div>
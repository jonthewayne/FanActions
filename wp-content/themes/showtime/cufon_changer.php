<?php
////////////////////////////////////////////////////////////////////////////////
// Cufon character set changer
////////////////////////////////////////////////////////////////////////////////
$font = get_option('st_language_type');
if($font == "Basic Latin"){
  $bold = 'custom.font.bold.basic.js';
  $semi = 'custom.font.semibold.basic.js';
}
else if($font == "Basic Latin + Supplement 1"){
  $bold = 'custom.font.bold.basic.1sup.js';
  $semi = 'custom.font.semibold.basic.1sup.js';
}
else if($font == "Basic Latin + Extended-A"){
  $bold = 'custom.font.bold.basic.exta.js';
  $semi = 'custom.font.semibold.basic.exta.js';
}
else if($font == "Basic Latin + Extended-B"){
  $bold = 'custom.font.bold.basic.extb.js';
  $semi = 'custom.font.semibold.basic.extb.js';
}
else if($font == "Basic Latin + Supplement 1 + Extended A"){
  $bold = 'custom.font.bold.basic.1supexta.js';
  $semi = 'custom.font.semibold.basic.1supexta.js';
}

else if($font == "Basic Latin + Cyrillic"){
  $bold = 'custom.font.bold.basic.cyr.js';
  $semi = 'custom.font.semibold.basic.cyr.js';
}
else if($font == "Basic Latin + Russian"){
  $bold = 'custom.font.bold.basic.rus.js';
  $semi = 'custom.font.semibold.basic.rus.js';
}
else if($font == "Basic Latin + Greek and Coptic"){
  $bold = 'custom.font.bold.basic.greek.js';
  $semi = 'custom.font.semibold.basic.greek.js';
}
else if($font == "All"){
  $bold = 'custom.font.bold.all.js';
  $semi = 'custom.font.semibold.all.js';
}
?>

<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/cufon/<?php echo $bold; ?>"></script>
<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/js/cufon/<?php echo $semi; ?>"></script>

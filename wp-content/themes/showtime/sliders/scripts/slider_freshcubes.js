/*  
    NAME: Paralel Slider;
    AUTHOR: Freshface;
    WEBSITE: http://www.freshface.net
*/         

jQuery(document).ready(function($){
                                       
  var actual_img = 0;    
  var slide_count =  $('#fresh_cube_nav_wrapper li').length;
  
var autoslide_interval = setInterval(function(){
      actual_img++;
      if(actual_img == slide_count){actual_img=0;}
      change_images(actual_img);
      }, 5000);
      
// postup:
/*
  1. switchnout obrazky - aktualni z pozadi do kostek, ktere budou mit display block pote
  2. budouci z kostek do pozadi
  3. zjistit transition
  4. udelat animaci
  5. switchnout obrazky
 */   
$('.fresh_cube').click(function(){
     var is_lightbox = $('.fresh_cube_image_'+actual_img).find('.lightbox').attr('title');
     var link_url = $('.fresh_cube_image_'+actual_img).find('.lightbox').html();
     if(link_url != '')
     {
      if(is_lightbox == 1){$.prettyPhoto.open(link_url,'','');}
      else{ window.location = link_url;}
     }
});
    $('#fresh_cube_nav_wrapper li').click(function(){
  // actual_img = $(this).attr('title');
      clearInterval(autoslide_interval);
    change_images($(this).attr('title'));
    
  //  alert($('.fresh_cube_image_0').attr('title')); 
  });
  
  $('.slide_left').click(function(){            
   clearInterval(autoslide_interval); 
  $('.fresh_cube').parent().attr('rel','');
    $('.fresh_cube:animated').parent().attr('rel', 'animating');   
    if(actual_img -1 >= 0 && $('.fresh_cube').parent().attr('rel') != 'animating'){
    actual_img --;   
    change_images(actual_img);}
    else if(actual_img -1 < 0 && $('.fresh_cube').parent().attr('rel') != 'animating')
    {
      actual_img = slide_count - 1;   
    change_images(actual_img);
    }
  });
  
    $('.slide_right').click(function(){      
      actual_img++;
        clearInterval(autoslide_interval); 
        $('.fresh_cube').parent().attr('rel','');
        $('.fresh_cube:animated').parent().attr('rel', 'animating');    

      
      if( actual_img < slide_count && $('.fresh_cube').parent().attr('rel') != 'animating')
      {
    //    alert(actual_img + '  ' + $('#fresh_cube_nav_wrapper li').size());
     
        change_images(actual_img);
      }
      else if( actual_img >= slide_count && $('.fresh_cube').parent().attr('rel') != 'animating' )
      {actual_img = 0;change_images(actual_img);}
      else {
      actual_img--;}
  });
  function change_images(img_id)
  {       
   
//    alert($('.fresh_cube:[name=dsdsdsdsds]')); 
    $('.fresh_cube').parent().attr('rel','');
    $('.fresh_cube:animated').parent().attr('rel', 'animating');
   if( $('.fresh_cube').parent().attr('rel') != 'animating')
   {         
      actual_img = img_id;
    $('#fresh_cube_nav_wrapper li').removeClass('active');
     $('#fresh_cube_nav_wrapper li').eq(img_id).addClass('active');
    var new_img_src = $('.fresh_cube_image_'+img_id).find('img').attr('src');
  //  alert(new_img_src);
    var actual_img_src = $('#slider_freshcubes').css('background-image');
    
    //alert(actual_img_src);
   // alert(img_src);
    reset_grid();
    $('.fresh_cube').css('background-image', actual_img_src);// 'url('+img_src+')');
    $('.fresh_cube').css('display', 'block');
    $('.fresh_cube').css('opacity', 1);
     
    $('#slider_freshcubes').css('background-image', 'url('+new_img_src+')');
    $('.slide_desc').html($('.fresh_cube_image_'+img_id).find('.transition').html());
    

    var transition_name =  $('.fresh_cube_image_'+img_id).find('.transition').attr('title');
    transition(transition_name);
   } 
    //transition_random();
  }
  function transition(name)
  {
    // random, basic, fly
  //  alert(name);
    if(name == 'random') {transition_random();}
    else if (name == 'basic') {transition_basic();}
    else if( name == 'fly') {transition_fly();}
    else if( name == 'flyback') {transition_flyback();}
    else if( name == 'lines') {transition_lines();}
  }
  
  function reset_grid()
  {
    for(var w = 0; w < 8; w++)
    {
      for(var h = 0; h < 3; h++)
      {
        $('#fresh_cube_'+w+'_'+h).css('top', h*120);
        $('#fresh_cube_'+w+'_'+h).css('left', w*120);
      }
    }
  }
  function transition_random()
  {
    for(var w = 0; w < 8; w++)
    {
      for(var h = 0; h < 3; h++)
      {
        var hide_time = Math.random() * 700 + 400;
        $('#fresh_cube_'+w+'_'+h).animate({opacity:0}, hide_time);
      }
    }
  }
  function transition_basic()
  {
    for(var w = 0; w < 8; w++)
    {
      for(var h = 0; h < 3; h++)
      {
        $('#fresh_cube_'+w+'_'+h).animate({opacity:0}, 500 + (w*150) );
      }
    }
  }
  function transition_fly()
  {
  var animate_time = 500;
   for(var h = 0; h < 3; h++)
    {
       for(var w = 0; w < 8; w++)
      {
        animate_time = (w+h)*100;
        
        $('#fresh_cube_'+w+'_'+h).delay(animate_time).animate({opacity: -1,top:(h-1)*120, left:(w-1)*120}, 450);
     //   $('#fresh_cube_'+w+'_'+h).delay(animate_time).animate({opacity:0}, {queue:false, duration:450/2});
      }
    }
  }  
  function transition_flyback()
  {
    var animate_time = 500;
     for(var h = 0; h < 3; h++)
      {
         for(var w = 0; w < 8; w++)
        {
          animate_time = (w+h)*100;
          
          $('#fresh_cube_'+w+'_'+h).delay(animate_time).animate({opacity: -1,top:(h+1)*120, left:(w+1)*120}, 450);
       //   $('#fresh_cube_'+w+'_'+h).delay(animate_time).animate({opacity:0}, {queue:false, duration:450/2});
        }
      }
  }  
    function transition_lines()
  {
    var animate_time = 500;
     for(var h = 0; h < 3; h++)
      {
         for(var w = 0; w < 8; w++)
        {
          animate_time = (w+1)*50;
          
          if(h==1)
          {
            $('#fresh_cube_'+(7-w)+'_'+h).delay(animate_time).animate({opacity: 0}, 450);
          }
          else
          {
            $('#fresh_cube_'+w+'_'+h).delay(animate_time).animate({opacity: 0}, 450);
          }
       //   $('#fresh_cube_'+w+'_'+h).delay(animate_time).animate({opacity:0}, {queue:false, duration:450/2});
        }
      }
  } 
});                
/*  
    NAME: Paralel Slider;
    AUTHOR: Freshface;
    WEBSITE: http://www.freshface.net
*/

jQuery(document).ready(function($){  
////////////////////////////////////////////////////////////////////////////////
// INIT FUNCTION - here we set positions of the elements
////////////////////////////////////////////////////////////////////////////////.

   /*  $('.fresh_cubes').hover(function(){
         for(var h=0; h < 360/cube_height;  h++)
          {
             for(var w = 0;  w < 960/cube_width;   w++)
            {
              //  $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: (w-1)*cube_height/2, top: (h-1)*cube_width/2}, animate_counter + w*220);
          //    $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: -cube_width, top: -cube_height}, animate_counter + w*220);
         //  $('#fresh_cube_'+w+'_'+h).animate({opacity:0,  top: -cube_height}, animate_counter);
              
                
            }
          animate_counter = animate_counter + 220  
          }  
          },function(){
          animate_counter = 1000
          for(var h=0; h < 360/cube_height;  h++)
          {
             for(var w = 0;  w < 960/cube_width;   w++)
            {
              //  $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: (w-1)*cube_height/2, top: (h-1)*cube_width/2}, animate_counter + w*220);
          //    $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: -cube_width, top: -cube_height}, animate_counter + w*220);
         //  $('#fresh_cube_'+w+'_'+h).stop().animate({opacity:1,  top: h*cube_height}, animate_counter);
                
            }
          animate_counter = animate_counter + 220  
          }  
          } );      */
          
      /*    $('.fresh_cubes').hover(function(){
           for(var w = 0;  w < 960/cube_width;   w++)
        
          {
              for(var h=0; h < 360/cube_height;  h++)
            {
              //  $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: (w-1)*cube_height/2, top: (h-1)*cube_width/2}, animate_counter + w*220);
          //    $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: -cube_width, top: -cube_height}, animate_counter + w*220);
           $('#fresh_cube_'+w+'_'+h).animate({opacity:0,  top: -cube_height*h}, animate_counter+20);
              
                
            }
          animate_counter = animate_counter + 120;  
          }  
          },function(){
          animate_counter = 1000
          for(var h=0; h < 360/cube_height;  h++)
          {
             for(var w = 0;  w < 960/cube_width;   w++)
            {
              //  $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: (w-1)*cube_height/2, top: (h-1)*cube_width/2}, animate_counter + w*220);
          //    $('#fresh_cube_'+w+'_'+h).animate({opacity:0, left: -cube_width, top: -cube_height}, animate_counter + w*220);
           $('#fresh_cube_'+w+'_'+h).stop().animate({opacity:1,  top: h*cube_height}, animate_counter);
                
            }
          animate_counter = animate_counter + 220  
          }  
          } );    */
        //  var neco = setInterval('pica()', 200);
   /*     var animate_counter = 1000;
        var cube_width = 120;
        var cube_height = 120;
        var w = 0;
         $('.fresh_cubes').hover(function(){
          //  $('#fresh_cube_0_0').stop().animate({opacity:0}, 200,  function(){pica();});
          var spd = 20;
            setInterval('hide_horizontal()',spd);

         },function(){
         
         });
              
          function pica()
          {
              w++;
              if(w<960/cube_width)
              {
              $('#fresh_cube_'+w+'_0').stop().animate({opacity:0}, 200,  function(){pica();});    
              }
          }      */
////////////////////////////////////////////////////////////////////////////////
// CUBE MISCH MASCH
////////////////////////////////////////////////////////////////////////////////         
  $('.fresh_cubes').hover(function(){
    cube_borders_up();
  },function(){
    cube_borders_down();
  });        
         
////////////////////////////////////////////////////////////////////////////////
// RECTANGLE MISCH MASCH
//////////////////////////////////////////////////////////////////////////////// 
 /* $('.fresh_cubes').hover(function(){
    rect_misch_up();
  },function(){
    rect_misch_down();
  });   */
});
var slider_width = 960;
var slider_height = 360;
var cube_side = 60;
var cube_interval_holder;

////////////////////////////////////////////////////////////////////////////////
// CUBE BORDERS 
//////////////////////////////////////////////////////////////////////////////// 
var cube_actual_width = 0;
function cube_borders_up()
{
  cube_actual_width=0;
  //cube_interval_holder = setTimeout('cube_borders_hide_line()',400);  
  cube_interval_holder = setInterval('cube_borders_hide_line()',100);  
  cube_borders_hide_line();
  //cube_cross_hide_line();
}
function cube_borders_down()
{
  cube_actual_width=0;
 cube_interval_holder = setInterval('cube_borders_show_line()',200);  
  //cube_cross_show_line(0);
}
function cube_borders_hide_line()
{
//  if(cube_actual_width >=3){clearInterval(cube_interval_holder);}
  //var odd = param;
  var spd = 500;
  if(cube_actual_width ==0)
  {
    for(var i = 0; i < slider_width / cube_side; i++)
    {
      jQuery('#fresh_object_'+i+'_0').animate({opacity:0}, spd);
      jQuery('#fresh_object_'+i+'_5').animate({opacity:0}, spd);
      
      if(i<6)
      {
        jQuery('#fresh_object_0_'+i).animate({opacity:0}, spd);
        jQuery('#fresh_object_15_'+i).animate({opacity:0}, spd);
      }
    }
    }
    else if(cube_actual_width ==1)
    {
      for(var i = 1; i < (slider_width / cube_side) - 1; i++)
      {
        jQuery('#fresh_object_'+i+'_1').animate({opacity:0}, spd);
        jQuery('#fresh_object_'+i+'_4').animate({opacity:0}, spd);
        
       // if(i<5 && i > 0)
        {
          jQuery('#fresh_object_1_'+i).animate({opacity:0}, spd);
          jQuery('#fresh_object_14_'+i).animate({opacity:0}, spd);
        }
      }
     }
    else if(cube_actual_width ==2)
    {
      //alert('pica');
      for(var i = 2; i < (slider_width / cube_side) - 2; i++)
      {
        jQuery('#fresh_object_'+i+'_2').animate({opacity:0}, spd);
        jQuery('#fresh_object_'+i+'_3').animate({opacity:0}, spd);
        
       // if(i<5 && i > 0)
        {
          jQuery('#fresh_object_2_'+i).animate({opacity:0}, spd);
          jQuery('#fresh_object_13_'+i).animate({opacity:0}, spd);
        }
      }
     }
     else{clearInterval(cube_interval_holder);}
    cube_actual_width++;

}  
function cube_borders_show_line()
{
   var spd = 700;
  if(cube_actual_width ==0)
  {
    for(var i = 0; i < slider_width / cube_side; i++)
    {
      jQuery('#fresh_object_'+i+'_0').animate({opacity:1}, spd);
      jQuery('#fresh_object_'+i+'_5').animate({opacity:1}, spd);
      
      if(i<6)
      {
        jQuery('#fresh_object_0_'+i).animate({opacity:1}, spd);
        jQuery('#fresh_object_15_'+i).animate({opacity:1}, spd);
      }
    }
    }
    else if(cube_actual_width ==1)
    {
      for(var i = 1; i < (slider_width / cube_side) - 1; i++)
      {
        jQuery('#fresh_object_'+i+'_1').animate({opacity:1}, spd);
        jQuery('#fresh_object_'+i+'_4').animate({opacity:1}, spd);
        
       // if(i<5 && i > 0)
        {
          jQuery('#fresh_object_1_'+i).animate({opacity:1}, spd);
          jQuery('#fresh_object_14_'+i).animate({opacity:1}, spd);
        }
      }
     }
    else if(cube_actual_width ==2)
    {
      //alert('pica');
      for(var i = 2; i < (slider_width / cube_side) - 2; i++)
      {
        jQuery('#fresh_object_'+i+'_2').animate({opacity:1}, spd);
        jQuery('#fresh_object_'+i+'_3').animate({opacity:1}, spd);
        
       // if(i<5 && i > 0)
        {
          jQuery('#fresh_object_2_'+i).animate({opacity:1}, spd);
          jQuery('#fresh_object_13_'+i).animate({opacity:1}, spd);
        }
      }
     }
     else{clearInterval(cube_interval_holder);}
    cube_actual_width++;
}  

////////////////////////////////////////////////////////////////////////////////
// CUBE cross
//////////////////////////////////////////////////////////////////////////////// 
var cube_actual_width = 0;
function cube_cross_up()
{
  cube_actual_width=0;
  cube_interval_holder = setTimeout('cube_cross_hide_line(1)',400);  
  cube_cross_hide_line(0);
  //cube_cross_hide_line();
}
function cube_cross_down()
{
  cube_actual_width=0;
 cube_interval_holder = setTimeout('cube_cross_show_line(1)',400);  
  cube_cross_show_line(0);
}
function cube_cross_hide_line(param)
{
  //if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  var odd = param;
  for(var i = 0; i < slider_height / cube_side; i++)
  {
    odd = (odd - 1) * (odd-1);
    //alert(cube_actual_width);
 //   jQuery('#fresh_object_'+cube_actual_width+'_'+i).animate({opacity:0}, 300);
  //  jQuery('#fresh_object_'+(( slider_width / cube_side)-cube_actual_width)+'_'+i).animate({opacity:0}, 300);
    for(var j = 0; j < slider_width / cube_side; j++)
    {
      if(j % 2 == odd ){jQuery('#fresh_object_'+j+'_'+i).animate({opacity:0}, 800);} 
    }
  }
  //cube_actual_width ++;
}  
function cube_cross_show_line(param)
{
  var odd = param;
  for(var i = 0; i < slider_height / cube_side; i++)
  {
    odd = (odd - 1) * (odd-1);

    for(var j = 0; j < slider_width / cube_side; j++)
    {
      if(j % 2 == odd ){jQuery('#fresh_object_'+j+'_'+i).animate({opacity:1}, 800);} 
    }
  }
}  
////////////////////////////////////////////////////////////////////////////////
// CUBE FROM CENTER SQUARE
//////////////////////////////////////////////////////////////////////////////// 
var cube_actual_width = 0;
function cube_square_up()
{
  cube_actual_width=0;
  cube_interval_holder = setInterval('cube_square_hide_line()',100);  
}
function cube_square_down()
{
  cube_actual_width=0;
  cube_interval_holder = setInterval('cube_square_show_line()',100); 
}
function cube_square_hide_line()
{
  var speed = 400;
  if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  if(cube_actual_width==0)
  {
    jQuery('#fresh_object_7_2').animate({opacity:0}, speed);
    jQuery('#fresh_object_7_3').animate({opacity:0}, speed);
    jQuery('#fresh_object_8_2').animate({opacity:0}, speed);
    jQuery('#fresh_object_8_3').animate({opacity:0}, speed);
    
  }
  else if(cube_actual_width ==1)
  {
    jQuery('#fresh_object_6_1').animate({opacity:0}, speed);
    jQuery('#fresh_object_6_2').animate({opacity:0}, speed);
    jQuery('#fresh_object_6_3').animate({opacity:0}, speed);
    jQuery('#fresh_object_6_4').animate({opacity:0}, speed);
    
    jQuery('#fresh_object_7_1').animate({opacity:0}, speed);
    jQuery('#fresh_object_7_4').animate({opacity:0}, speed);
    jQuery('#fresh_object_8_1').animate({opacity:0}, speed);
    jQuery('#fresh_object_8_4').animate({opacity:0}, speed);
    
    jQuery('#fresh_object_9_1').animate({opacity:0}, speed);
    jQuery('#fresh_object_9_2').animate({opacity:0}, speed);
    jQuery('#fresh_object_9_3').animate({opacity:0}, speed);
    jQuery('#fresh_object_9_4').animate({opacity:0}, speed);
  }
  else if(cube_actual_width ==2)
  {
    jQuery('#fresh_object_5_0').animate({opacity:0}, speed);
    jQuery('#fresh_object_5_1').animate({opacity:0}, speed);
    jQuery('#fresh_object_5_2').animate({opacity:0}, speed);
    jQuery('#fresh_object_5_3').animate({opacity:0}, speed);
    jQuery('#fresh_object_5_4').animate({opacity:0}, speed);
    jQuery('#fresh_object_5_5').animate({opacity:0}, speed);
    
    jQuery('#fresh_object_10_0').animate({opacity:0}, speed);
    jQuery('#fresh_object_10_1').animate({opacity:0}, speed);
    jQuery('#fresh_object_10_2').animate({opacity:0}, speed);
    jQuery('#fresh_object_10_3').animate({opacity:0}, speed);
    jQuery('#fresh_object_10_4').animate({opacity:0}, speed);
    jQuery('#fresh_object_10_5').animate({opacity:0}, speed);
    
    jQuery('#fresh_object_6_0').animate({opacity:0}, speed);
    jQuery('#fresh_object_7_0').animate({opacity:0}, speed);
    jQuery('#fresh_object_8_0').animate({opacity:0}, speed);
    jQuery('#fresh_object_9_0').animate({opacity:0}, speed);
    
    jQuery('#fresh_object_6_5').animate({opacity:0}, speed);
    jQuery('#fresh_object_7_5').animate({opacity:0}, speed);
    jQuery('#fresh_object_8_5').animate({opacity:0}, speed);
    jQuery('#fresh_object_9_5').animate({opacity:0}, speed);
  
  }
  else
  {
      var slider_items = (((slider_width/cube_side) / 2 ) - 1) - cube_actual_width;
      for(var i = 0; i < slider_height / cube_side; i++)
      {
      
        jQuery('#fresh_object_'+slider_items+'_'+i).animate({opacity:0}, speed);
        jQuery('#fresh_object_'+((( slider_width / cube_side)/2)+cube_actual_width)+'_'+i).animate({opacity:0}, speed);
      }
  }
 /* if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  for(var i = 0; i < slider_height / cube_side; i++)
  {
    jQuery('#fresh_object_'+cube_actual_width+'_'+i).animate({opacity:0}, 300);
    jQuery('#fresh_object_'+(( slider_width / cube_side)-cube_actual_width)+'_'+i).animate({opacity:0}, 300);
  }           */
  cube_actual_width ++; 
}  
function cube_square_show_line()
{
    var speed = 400;
  if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  if(cube_actual_width==0)
  {
    jQuery('#fresh_object_7_2').animate({opacity:1}, speed);
    jQuery('#fresh_object_7_3').animate({opacity:1}, speed);
    jQuery('#fresh_object_8_2').animate({opacity:1}, speed);
    jQuery('#fresh_object_8_3').animate({opacity:1}, speed);
    
  }
  else if(cube_actual_width ==1)
  {
    jQuery('#fresh_object_6_1').animate({opacity:1}, speed);
    jQuery('#fresh_object_6_2').animate({opacity:1}, speed);
    jQuery('#fresh_object_6_3').animate({opacity:1}, speed);
    jQuery('#fresh_object_6_4').animate({opacity:1}, speed);
    
    jQuery('#fresh_object_7_1').animate({opacity:1}, speed);
    jQuery('#fresh_object_7_4').animate({opacity:1}, speed);
    jQuery('#fresh_object_8_1').animate({opacity:1}, speed);
    jQuery('#fresh_object_8_4').animate({opacity:1}, speed);
    
    jQuery('#fresh_object_9_1').animate({opacity:1}, speed);
    jQuery('#fresh_object_9_2').animate({opacity:1}, speed);
    jQuery('#fresh_object_9_3').animate({opacity:1}, speed);
    jQuery('#fresh_object_9_4').animate({opacity:1}, speed);
  }
  else if(cube_actual_width ==2)
  {
    jQuery('#fresh_object_5_0').animate({opacity:1}, speed);
    jQuery('#fresh_object_5_1').animate({opacity:1}, speed);
    jQuery('#fresh_object_5_2').animate({opacity:1}, speed);
    jQuery('#fresh_object_5_3').animate({opacity:1}, speed);
    jQuery('#fresh_object_5_4').animate({opacity:1}, speed);
    jQuery('#fresh_object_5_5').animate({opacity:1}, speed);
    
    jQuery('#fresh_object_10_0').animate({opacity:1}, speed);
    jQuery('#fresh_object_10_1').animate({opacity:1}, speed);
    jQuery('#fresh_object_10_2').animate({opacity:1}, speed);
    jQuery('#fresh_object_10_3').animate({opacity:1}, speed);
    jQuery('#fresh_object_10_4').animate({opacity:1}, speed);
    jQuery('#fresh_object_10_5').animate({opacity:1}, speed);
    
    jQuery('#fresh_object_6_0').animate({opacity:1}, speed);
    jQuery('#fresh_object_7_0').animate({opacity:1}, speed);
    jQuery('#fresh_object_8_0').animate({opacity:1}, speed);
    jQuery('#fresh_object_9_0').animate({opacity:1}, speed);
    
    jQuery('#fresh_object_6_5').animate({opacity:1}, speed);
    jQuery('#fresh_object_7_5').animate({opacity:1}, speed);
    jQuery('#fresh_object_8_5').animate({opacity:1}, speed);
    jQuery('#fresh_object_9_5').animate({opacity:1}, speed);
  
  }
  else
  {
      var slider_items = (((slider_width/cube_side) / 2 ) - 1) - cube_actual_width;
      for(var i = 0; i < slider_height / cube_side; i++)
      {
      
        jQuery('#fresh_object_'+slider_items+'_'+i).animate({opacity:1}, speed);
        jQuery('#fresh_object_'+((( slider_width / cube_side)/2)+cube_actual_width)+'_'+i).animate({opacity:1}, speed);
      }
  }
 /* if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  for(var i = 0; i < slider_height / cube_side; i++)
  {
    jQuery('#fresh_object_'+cube_actual_width+'_'+i).animate({opacity:1}, 300);
    jQuery('#fresh_object_'+(( slider_width / cube_side)-cube_actual_width)+'_'+i).animate({opacity:1}, 300);
  }           */
  cube_actual_width ++; 
}  
////////////////////////////////////////////////////////////////////////////////
// CUBE TO CENTER
//////////////////////////////////////////////////////////////////////////////// 
var cube_actual_width = 0;
function cube_center_up()
{
  cube_actual_width=0;
  cube_interval_holder = setInterval('cube_center_hide_line()',50);  
}
function cube_center_down()
{
  cube_actual_width=0;
  cube_interval_holder = setInterval('cube_center_show_line()',50); 
}
function cube_center_hide_line()
{
  if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  for(var i = 0; i < slider_height / cube_side; i++)
  {
    jQuery('#fresh_object_'+cube_actual_width+'_'+i).animate({opacity:0}, 300);
    jQuery('#fresh_object_'+(( slider_width / cube_side)-cube_actual_width)+'_'+i).animate({opacity:0}, 300);
  }
  cube_actual_width ++;
}  
function cube_center_show_line()
{
   if(cube_actual_width >= (slider_width / cube_side)/2){clearInterval(cube_interval_holder);}
  for(var j = 0; j < slider_height / cube_side; j++)
  {
    jQuery('#fresh_object_'+cube_actual_width+'_'+j).animate({opacity:1}, 300);
    jQuery('#fresh_object_'+(( slider_width / cube_side)-cube_actual_width)+'_'+j).animate({opacity:1}, 300);
  }
  cube_actual_width ++;
}  
////////////////////////////////////////////////////////////////////////////////
// CUBE MISCH MASCH FUNCTION
//////////////////////////////////////////////////////////////////////////////// 

var cube_actual_width = 0;
function cube_misch_up()
{
  cube_actual_width=0;
  cube_interval_holder = setInterval('cube_misch_hide_line()',50);  
}
function cube_misch_down()
{
  cube_actual_width=0;
  cube_interval_holder = setInterval('cube_misch_show_line()',50); 
}
function cube_misch_hide_line()
{
  if(cube_actual_width >= slider_width / cube_side){clearInterval(cube_interval_holder);}
  for(var i = 0; i < slider_height / cube_side; i++)
  {
    jQuery('#fresh_object_'+cube_actual_width+'_'+i).animate({opacity:0}, 300);
  }
  cube_actual_width ++;
} 
function cube_misch_show_line()
{
  if(cube_actual_width >= slider_width / cube_side){clearInterval(cube_interval_holder);}
  for(var j = 0; j < slider_height / cube_side; j++)
  {
    jQuery('#fresh_object_'+cube_actual_width+'_'+j).animate({opacity:1}, 300);
  }
  cube_actual_width ++;
}  
////////////////////////////////////////////////////////////////////////////////
// RECTANGLE MISCH MASCH FUNCTION
//////////////////////////////////////////////////////////////////////////////// 
var rect_count = 16;
var rect_height = 360;
var rect_misch_speed = 1000;
function rect_misch_up()
{
  
  for(var i = 0; i < rect_count; i++)
  {
    var direction = 360;
    if( i % 2 == 0) {direction = -360};
    jQuery('#fresh_object_'+i).stop().animate({top:direction/2}, rect_misch_speed);
    jQuery('#fresh_object_'+i).animate({opacity:0}, {duration:rect_misch_speed/2, queue:false});
  }
}
function rect_misch_down()
{
  
  for(var i = 0; i < rect_count; i++)
  {
    var direction = 1;
    if( i % 2 == 0) {direction = -1};
    jQuery('#fresh_object_'+i).stop().animate({top:0, opacity:1}, rect_misch_speed);
  }
}

 
/*
var ww = -1;
var hh = 0;
cube_width = 60;
var hide_counter = 0;
function hide_horizontal()
{
   ww++;
   if(ww<960/cube_width)
   {
      jQuery('#fresh_cube_'+ww+'_'+hh).stop().animate({opacity:0}, 1000);
   }
   else
   {
      hh++;
      ww=-1;
   }
   
}

function reveal_horizontal()
{
   ww++;
   if(ww<960/cube_width)
   {
      jQuery('#fresh_cube_'+ww+5+'_'+hh).animate({opacity:1}, 1000);
      jQuery('#fresh_cube_'+ww+4+'_'+hh).animate({opacity:1}, 1000);
      jQuery('#fresh_cube_'+ww+3+'_'+hh).animate({opacity:1}, 1000);
      jQuery('#fresh_cube_'+ww+2+'_'+hh).animate({opacity:1}, 1000);
      jQuery('#fresh_cube_'+ww+1+'_'+hh).animate({opacity:1}, 1000);
      jQuery('#fresh_cube_'+ww+'_'+hh).animate({opacity:1}, 1000);
   }
   else
   {
      hh++;
      ww=-1;
   }
}
       */
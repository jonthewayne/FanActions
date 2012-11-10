<?php /*
Template Name: Contact
*/ ?>
<?php
$status = "";
if(isset($_POST['cf_text']) )
{
  if($_POST['cf_que'] != get_option('st_cf_security_answer') )
    $status = get_option('st_cf_security_answer_fail');
  else
  {
    if(isset($_POST['cf_text']) )
    {
      $email_adress_where_send = $lcp_cf_yourmail;
      //require_once "scripts/class.phpmailer.php";
      $mail = new PHPMailer();
        $mail->IsMail();
        $mail->IsHTML(true);
        $mail->CharSet  = "utf-8";
        $mail->From     = $_POST['cf_mail'];
        $mail->FromName = $_POST['cf_name'];
        $mail->WordWrap = 50;
        $mail->Subject  =  st_option('st_cf_subject');
        $mail->Body     =  $_POST['cf_text']; //
        $mail->AddAddress( get_option('st_cf_yourmail') );
        $mail->AddReplyTo($_POST['cf_mail']);
      if(!$mail->Send()) {  // send e-mail
        $status =  st_option('st_cf_send_ko');
      }
      else
      {
         $status =  st_option('st_cf_send_ok');
      }
    }

  }
}
//allows the theme to get info from the theme options page
/*global $options;
foreach ($options as $value) {
    if (lcp_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
    else { $$value['id'] =lcp_option( $value['id'] ); }
     $$value['id'] = stripslashes($$value['id']); 
    }                                             */
?>
<?php
 get_header();
?>
<?php 
////////////////////////////////////////////////////////////////////////////////
// INTRO (category info)
////////////////////////////////////////////////////////////////////////////////
?>
<div id="intro_wrapper">
    <div class="intro_page">
    <h2><?php            
         echo $post->post_title;
    ?></h2>
    <div class="page_meta_box"><?php echo stripslashes(get_post_meta($post->ID, 'Description', true));?></div>
    </div><!-- END "div.intro_home" -->
</div><!-- END "div#intro_wrapper" -->
<?php 
////////////////////////////////////////////////////////////////////////////////
// END INTRO
////////////////////////////////////////////////////////////////////////////////
?>

<?php 
////////////////////////////////////////////////////////////////////////////////
// CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>
<div id="content_wrapper">
 <div class="content_shadow_right">
	<div id="content" class="content_page">

<?php
// >>>>>>>>>>>>>>>>> WIDGET SIDEBARS >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    include 'sidebar.php';        // external link to showtime sidebar processor
// <<<<<<<<<<<<<<<<< END WIDGETS SIDEBARS <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
?>            

        <div id="page" class="page_template_blog">
        
        
<?php 
////////////////////////////////////////////////////////////////////////////////
// CONTACT START
////////////////////////////////////////////////////////////////////////////////
if(!isset($_POST['cf_text']) ) 
{
?>

                  <?php the_post(); the_content(); ?>
                   <form class="contact_form" method="post" id="commentform" action="">
                        	<p><input type="text" id="cf_name" name="cf_name" /><label for="name"><?php echo st_option('st_cf_name'); ?></label></p>

                            <p><input type="text" id="cf_mail" name="cf_mail" /><label for="mail"><?php echo st_option('st_cf_email'); ?></label></p>
                            <?php
                            $sec_que = get_option('st_cf_security_que');
                            if($sec_que != '') {
                            ?>
                                <p><input type="text" id="cf_que" name="cf_que" /><label for="mail"><?php echo $sec_que; ?></label></p>
                            <?php
                            }
                            ?>

                            <p><textarea rows="10" name="cf_text" id="cf_text" cols="10"></textarea></p>

                            <p><input name="submit" type="submit"  class="btn_a"  id="submit_contactform" tabindex="5" value="<?php echo get_option('st_cf_send'); ?>" /></p>
                        </form>

<?php 
}
else
{
  echo $status;
}
////////////////////////////////////////////////////////////////////////////////
// CONTACT END
////////////////////////////////////////////////////////////////////////////////
?>
        </div><!-- END "div#page" -->
        <div class="clear"></div>
    </div><!-- END "div#content" -->

</div><!-- END "div.content_shadow_right" -->    
</div><!-- END "div#content_wrapper" -->
<?php 
////////////////////////////////////////////////////////////////////////////////
// END CONTENT WRAPPER
////////////////////////////////////////////////////////////////////////////////
?>


<?php
 get_footer();
?>
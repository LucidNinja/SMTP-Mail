<?php
/*
Plugin Name:  SMTP Mail
Plugin URI:   https://wakeupdreamer.com.au
Description:  Use SMTP Server for sending mail.
Version:      2.0
Author:       Wake Up, Dreamer
Author URI:   https://wakeupdreamer.com.au
License:      MIT License
*/

add_action('phpmailer_init', 'SMTPMail::mail');

/*
Define the following constants in functions.php or config/application.php
  define('USE_SMTP', true);
  define('SMTP_HOST', env('SMTP_HOST'));
  define('SMTP_USER', env('SMTP_USER'));
  define('SMTP_PASSWORD', env('SMTP_PASSWORD'));
  define('SMTP_PORT', env('SMTP_PORT'));
  define('SMTP_FROM_EMAIL', env('SMTP_FROM_EMAIL'));
  define('SMTP_FROM_NAME', env('SMTP_FROM_NAME'));
*/

class SMTPMail {

  static public function mail( $phpmailer ){

    if ( !defined('USE_SMTP') ){
      return;
    }

    $phpmailer->isSMTP();
    $phpmailer->Host = SMTP_HOST;
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_USER;
    $phpmailer->Password = SMTP_PASSWORD;
  
    // Additional settings
    $phpmailer->From = SMTP_FROM_EMAIL;
    $phpmailer->FromName = SMTP_FROM_NAME;
  }
}

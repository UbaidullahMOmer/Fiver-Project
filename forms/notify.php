<?php

  
  $receiving_email_address = 'info@aurujewtls.in';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = "Subscriber";
  $contact->from_email = $_POST['email'];
  $contact->subject ="Notify me request";



  $contact->add_message( $_POST['email'], 'Email');

  echo $contact->send();
?>

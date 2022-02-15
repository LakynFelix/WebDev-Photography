<?php 
// $to 'lakynmphotography@hotmail.com';

// $subject = 'subject';
// $message = '<h1>message';

// $headers 

// if (isset($_REQUEST['submitted'])) {
// // Initialize error array.
//   $errors = array();
//   // Check for a proper Name
//   if (!empty($_REQUEST['name'])) {
//   $name = $_REQUEST['name'];
//   $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
//   if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
//   else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
//   } else {$errors[] = 'You forgot to enter your Name.';}
  
//   // Check for a proper Email
//   if (!empty($_REQUEST['email'])) {
//   $email = $_REQUEST['email'];
//   $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
//   if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
//   else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-25 long.';}
//   } else {$errors[] = 'You forgot to enter your email.';}
  
//   // Check for a proper Subject
//   if (!empty($_REQUEST['subject'])) {
//     $subject = $_REQUEST['subject'];
//     $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
//     if (preg_match($pattern,$subject)){ $subject = $_REQUEST['subject'];}
//     else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
//     } else {$errors[] = 'You forgot to enter a subject.';}
    
//       // Check for a proper Message
//       if (!empty($_REQUEST['message'])) {
//         $message = $_REQUEST['message'];
//         $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
//         if (preg_match($pattern,$message)){ $message = $_REQUEST['message'];}
//         else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-200 long.';}
//         } else {$errors[] = 'You forgot to enter a message.';}
  
  
//   //End of validation
 
 
//   if (isset($_REQUEST['submitted'])) {
//     if (empty($errors)) { 
//     $from = "Lakyn M Felix Portfolio!"; //Site name
//     // Change this to your email address you want to form sent to
//     $to = "lakynmphotography@hotmail.com"; 
//     $subject = "Admin - Our Site! Comment from " . $name . "";
    
//     $message = "Message from " . $name . " " . $email . " " . $subject . " " . $message . "";
//     mail($to,$subject,$message,$from);
//     }
//   }
//   ?>

<!-- // <?php  -->
//   //Print Errors
//   if (isset($_REQUEST['submitted'])) {
//   // Print any error messages. 
//   if (!empty($errors)) { 
//   echo '<hr /><h3>The following occurred:</h3><ul>'; 
//   // Print each error. 
//   foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
//   echo '</ul><h3>Your mail could not be sent due to input errors.</h3><hr />';}
//    else{echo '<hr /><h3 align="center">Your mail was sent. Thank you!</h3><hr /><p>Below is the message that you sent.</p>'; 
//   echo "Message from " . $name . " " . $email . " " . $subject . " " . $message . "";}
//   }
  
//End of errors array
  // ?>

 <?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'lakynmphotography@hotmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];


  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
  $contact->honeypot = $_POST['name'];

  $contact->recaptcha_secret_key = '6LeDUvkdAAAAACIfO3shctv2mBe5YkyEP-v2-qdO';

  echo $contact->send();
 ?> -->

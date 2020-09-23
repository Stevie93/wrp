<?php
if($_REQUEST['username'] == '' || $_REQUEST['phone'] == '' ||  $_REQUEST['business'] == ''):
  return "error";
endif;
if (filter_var($_REQUEST['contact_email'], FILTER_VALIDATE_EMAIL)):
  $subject = 'Request from New Business'; // Subject of your email

  // Receiver email address
  $to = 'webreceipt@webforgegh.com';  //Change the email address by yours
 

  // prepare header
  $header = 'From: '. $_REQUEST['username'] . ' <'. $_REQUEST['contact_email'] .'>'. "\r\n";
  $header .= 'Reply-To:  '. $_REQUEST['username'] . ' <'. $_REQUEST['contact_email'] .'>'. "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion();

$message = '';
  $message .= 'Name: ' . $_REQUEST['username'] . "\n";
  $message .= 'Email: ' . $_REQUEST['contact_email'] . "\n";
  $message .= 'Number: '. $_REQUEST['phone'] . "\n" ;
  $message .= 'Busines Name: '. $_REQUEST['business'];

  // Send contact information
  $mail = mail( $to, $subject , $message, $header );

  echo 'Your Message has been delivered. You will be contacted shortly';
  else:
    echo "error";
  endif; 


?>
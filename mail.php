<?php

include('class.phpmailer.php');
//Function to send mail using phpmailer library.
function send_mail($to, $subject, $message, $reply_to = '') {
  $mail = new PHPMailer();
  $mail->IsSMTP();                                      // set mailer to use SMTP
  $mail->AddAddress($to);
  $mail->AddReplyTo($reply_to);
  $mail->IsHTML(true);                                  // set email format to HTML
  $mail->Subject = $subject;
  $mail->Body    = $message;
  if(!$mail->Send()) {
    echo "Message could not be sent. <p>";
    echo "Mailer Error: " . $mail->ErrorInfo;
    return false;
  }
  return true;
}

?>
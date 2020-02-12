<!--
0. download PHP Mailer Class Here  https://github.com/Synchro/PHPMailer
  or
  download php mailer and Source code from https://drive.google.com/file/d/0BzlVPBUP5IM8dmpDZ2tEZjdRaEU/view   by The Programming Geek
1. https://www.google.com/settings/security/lesssecureapps
You should change the "Access for less secure apps" to Enabled (first enable it , then change to disabled and then back to enabled) */
2. $mail ->SMTPSecure = 'plain'; // Use plain instead of tls or ssl//SMTP server address: smtp.gmail.com. Gmail SMTP port (TLS): 587. SMTP port (SSL): 465
3. $mail ->Port = 587; it's tls port but use for plain auth too.
4. $mail ->SMTPDebug = 2; 0 is no debug, 1 little info, 2 message between servers, 4 is in detailed information for all communication 
5. go to php.ini file and enable extension=php_openssl.dll by removing ; (at start of stmt) 
6. try enabling IIS 
7.     

-->


<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 2;
   $mail ->SMTPAuth = true; 
   /* https://www.google.com/settings/security/lesssecureapps
You should change the "Access for less secure apps" to Enabled (first enable it , then change to disabled and then back to enabled) */
   $mail ->SMTPSecure = 'plain'; // Use plain instead of tls or ssl//SMTP server address: smtp.gmail.com. Gmail SMTP port (TLS): 587. SMTP port (SSL): 465
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // 465or 587
   $mail ->IsHTML(true);
   $mail ->Username = "atultestmail@gmail.com";
   $mail ->Password = "%5tgb%5tgb";
   $mail ->SetFrom("atultestmail@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }





   


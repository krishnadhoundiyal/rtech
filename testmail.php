<?php

require("class.phpmailer.php");
if(isset($_POST['submit'])){
    // echo 'submit';
    $err = "";
    $fname= $_POST['fname'];
    echo 'fname';
    $email= $_POST['email'];
    $phonenumber= $_POST['phonenumber'];
    $subject= $_POST['subject'];
    $message= $_POST['message'];

    if (isset($_POST['submit'])) {

        $err = '';
        if(empty($_POST['g-recaptcha-response'])){
            $err = "Invalid capta";
            echo "<script>alert(\"$err\");window.location.href=\"contact.php\";</script>";
            exit;
        }
            
            $mail = new PHPMailer;
            $mail->SMTPAuth = true;
            $mail->isSMTP();
            $mail->SMTPDebug = 2;
            $mail->Host = 'smtp.gmail.com';        
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'mail@naslegal.in';
            $mail->Password = 'N@slegal@1234';
            $mail->From = "mail@naslegal.in";
            $mail->FromName = "naslegal";
            $mail->addAddress('naslegal@naslegal.in');
            $mail->addAddress('amisha.s@neuralinfo.org');
            $mail->AddBCC('mahendra.s@neuralinfo.org');
            $mail->Subject = 'Enquiry from Naslegal website.';
            $message = '<html><body>';
            $message .= '<table rules="all" style="border:2px solid #4A5050; font-family:Verdana, Geneva, sans-serif; text-align:left; background-color:#F1F2F4;" cellpadding="7">';
            $message .= "<tr><th colspan='2' style='background-color:#F60; color:white; text-align:center;'>Message</th></tr>";
            $message .= "<tr><th style='border:none; font-weight:300; color:#576F93'>Name:- </th><td>".$name."</td></tr>";
            $message .= "<tr><th style='border:none; font-weight:300; color:#576F93'>Email:- </th><td>".$email."</td></tr>";
            $message .= "<tr><th style='border:none; font-weight:300; color:#576F93'>Number:- </th><td>".$number."</td></tr>";
            $message .= "<tr><th style='border:none; font-weight:300; color:#576F93'>Service:- </th><td>".$services."</td></tr>";
            $message .= "<tr><th style='border:none; font-weight:300; color:#576F93'>Comments:- </th><td>".$comments."</td></tr>";
        
            
            $message .= "<tr><th colspan='2' style='background-color:#F60; color:#FFC30D; text-align:center;'><a style='text-decoration:none; font-weight:300; color:white;'  href='https://onlineexam.co.in/' target='_blank'>AOC</a></th></tr>";
            $message .= "</table>";
            $message .= "</body></html>";
            $mail->Body = $message;
            
            $mail->IsHTML(true);
            
            if (!$mail->send()) {
                 error_log(print_r('FAIL '.$mail->ErrorInfo,true));   
                } else {
                  error_log(print_r('SUCCESS '.$mail->ErrorInfo,true)); 
                  echo "<script>alert(\"Thankyou for Contacting us, we will get back to you shortly.\");window.location.href=\"index.php\";</script>";
                }
}

            
}
?>
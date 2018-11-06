<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'somaiyahospital@gmail.com';                 // SMTP username
    $mail->Password = 'hellofrand';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('somaiyahospital@gmail.com', 'Somaiya Hospital');
    $mail->addAddress($email);     // Add a recipient
    $mail->addReplyTo('somaiyahospital@gmail.com', 'Somaiya Hospital');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Your appointmnet at Somaiya hospital';

    // $variables = array();

    // $variables['email'] = $email;
    // $variables['token_no'] = $token;
    // $variables['type'] = $type;


    // $template = file_get_contents("Email/templates/forgot_pass.html");

    // foreach($variables as $key => $value)
    // {
    //     $template = str_replace('{{ '.$key.' }}', $value, $template);
    // }

    $mail->Body  = "<P>Your appointment is confirmed.</p>";
    $mail->send();
    $_SESSION['message'] = "email sent successfully";
} catch (Exception $e) {
    $_SESSION['message'] = 'Email could not be sent. '. $mail->ErrorInfo;

}
?>
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once('vendor/autoload.php');
            
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $myEmail = "aavachhori@gmail.com";
        $txt = "You have received a message from your website from: ".$name.".\n\n".$message;

        $mail= new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = "587";
        $mail->isHTML();
        $mail->Username = $myEmail;
        $mail->Password = 'Dearchhori!!';
        $mail->SetFrom($myEmail);
        $mail->Subject= 'WEBSITE MESSAGE';
        $mail->Body = $txt;
        $mail->AddAddress($myEmail);


        echo "<p>ok....</p>";
        $mail->Send();
        echo "<p>Haha</p>";

    }
            
?>

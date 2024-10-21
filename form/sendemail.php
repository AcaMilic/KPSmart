<?php
if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mailFrom = $_POST['email'];

    $mailTo = "aleksandarmilic1995@gmail.com";
    $headers = "From: ".$mailFrom."\r\n" ."Reply-To: ".$mailFrom."\r\n";
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    if (mail($mailTo, "Contact Form Submission", $txt, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Email sending failed";
    }
}
?>
<?php
if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mailFrom = $_POST['email'];

    $mailTo = "aleksandarmilic1995@gmail.com";
    $headers = "From: ".$mailFrom."\r\n" ."Message: ".$message."\r\n";
    $txt = "You have received an e-mail from ".$name.".\n\n";

    if (mail($mailTo, $txt, $headers)) {
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Message could not be sent."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid input."]);
}
?>
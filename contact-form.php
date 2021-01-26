<?php
     
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];
     $email_from ="mbbhavana9@gmail.com";
     $email_body ="From: $name \n Message: $message";
     $to ="bhavana.mb9@gmail.com";
     $headers ="From: $email_from \r\n";
$headers ="Reply: $email \r\n";
mail($to,$email_body,$headers);
header("Location: index.html");

?>
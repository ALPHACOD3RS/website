<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $email_from = 'naolketema55@gmail.com';

  $email_subject = "New from MY Website";
  $email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "User Message: $message.\n";


  $to = "naolketema55@gmail.com";

  $headers = "From: $email_from \r\n";
  $headers = "Reply To: $email \r\n";

  mail($to, $email_subject, $email_body, $headers);
  header("Location: index.html");

?>
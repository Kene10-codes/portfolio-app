<?php 
  if(isset($_POST['send'])) {
      $name = $_POST['fullname'];
      $email = $_POST['email'];
      $subj = $_POST['subject'];
      $msg = $_POST['message'];

      $to = 'nwobodokenechukwu2@gmail.com';
      $subject = 'Form Submission';
      $message = "Topic: ".$subj."\n\n"."Name: ".$name."\n"."Wrote the following: "."\n\n".$msg;
      $headers = "From: ".$email;



      if(mail($to, $subject, $message, $headers)){
          echo $success = "<h1>Sent successfully! Thank you We will get back to you shortly!</h1>"
      } else {
          echo $error = "<h1>Something went wrong.</h1>";
      }
  }
?>
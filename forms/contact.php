<?php


 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $subject = $_REQUEST['subject'];
 $message = $_REQUEST['message'];

 $to = "tanvirulislam857@gmail.com";
 $txt = "Name = " . $name . "\r\n Email = " . $email."\r\n Subject = ".$subject."\r\n message = ".$message;

 $headers = "From : noreply@tanvirulislamdoha.io". "\r\n" . "CC: somebodyelse@example.com";

 if($email != NULL){
  mail($to, $subject, $txt, $headers);
  //echo "<script>alert('Your Message has been sent.')</script>";
 }


?>

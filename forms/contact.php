<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['email'];
    $message=$_POST['message'];

    $mailTo="mcan.ince@hotmail.com"
    $headers="From: ".$mailFrom;
    $txt="You've Received an email from".$name."\n\n".$message;

mail($mailTo,$subject,$txt,$headers);
header("location: index.php?mailsend")

  }
?>

<?php
 if ( isset($_POST['send'])) {
    extract($_POST);
    $subject = "MESSAGE FROM CONTACT FORM";
    $message = "Name: ".$firstname." ".$secondname."\n Email: ".$email."\n Message: \n".$message;
    mail("info@artscicle.co.ke", $subject, $message);
    header("location:contact.html");
 }
?>
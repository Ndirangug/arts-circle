<?php
    if (isset($_POST['submit'])) {
        extract($_POST);
        mail("info@artscircle.co.ke", "MESSAGE FROM YOUR SITE artscircle.co.ke", "Name: ".$name."\nTelephone: ".$telephone."\nEmail: ".$email."\n \n $message");
        header("location","index.html");
    }

?>
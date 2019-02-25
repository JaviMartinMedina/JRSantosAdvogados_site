<?php

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    
    $from = (isset($_POST['email']) ? $_POST['email'] : "contato@jrsantosadvocacia.com.br");
    $to = 'joaorsantosadv@gmail.com';

    $subject = "Contato pelo Site";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    
    header('/');   
?>
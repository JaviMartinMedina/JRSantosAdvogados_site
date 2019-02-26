<?php

	$url = 'https://jrsantosadvocacia.000webhostapp.com';

    $from = (isset($_POST['email']) ? $_POST['email'] : "site@jrsantosadvocacia.com.br");
    $to = 'joaorsantosadv@gmail.com';

    $telefone = (isset($_POST['telefone']) ? $_POST['telefone'] : "Não Informado");
    $celular = (isset($_POST['celular']) ? $_POST['celular'] : "Não Informado");

    $subject = "Contato pelo Site";
    $message = ( isset($_POST['message']) ? $_POST['message'] : '');

    $message = "
    Contato recebido pelo Site: \n
    Para: João Rodrigo dos Santos joaorsantosadv@gmail.com \n\n
    De: {$_POST['name']} $from \n
    Telefone: $telefone \n
    Celular: $celular \n
    
    Mensagem: $message \n\n ";
    
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

    header('Location: '. $url );   
?>
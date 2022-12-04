<?php 
    // se a chave existe
    if(isset($_POST['email']) && !empty($_POST['email'])){
        if(isset($_POST['telefone']) && !empty($_POST['telefone'])){
            $email =  $_POST['email'];
            $telefone = $_POST['telefone'];
            echo "Email de envio : ".$email. "<br/>";
            echo "Telefone de envio: ".$telefone;
        } 
    }
?>
<?php 

    $nome = $_GET['nome']; 
    $cidade = $_GET['cidade']; 
    $email = $_GET['email'];

    setcookie('nome', $nome, time()+3600*24);
	setcookie('cidade', $cidade, time()+3600*24);
    setcookie('email', $email, time()+3600*24);

    header("Location: mensagem.php");
?>
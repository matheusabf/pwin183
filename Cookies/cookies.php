<?php 

    $name = $_GET['name']; 
    $cidade = $_GET['cidade']; 
    $email = $_GET['email'];

    setcookie('name', $name, time()+3600*24);
	setcookie('cidade', $cidade, time()+3600*24);
    setcookie('email', $email, time()+3600*24);

    header("Location: mensagem.php");
?>

<?php

	include 'conecta.php';

        
            session_start();
	$nome = $_SESSION['nome_usu'];
        $comentario = $_POST['comentario'];
        $consulta = $conexao -> prepare("INSERT INTO livrodois (nome,comentario) VALUES ('$nome','$comentario')");

	$consulta -> execute();
        
	header('Location: livroEden.php');


?>


<?php

	include 'conecta.php';

        
            session_start();
	$nome = $_SESSION['nome_usu'];
        $comentario = $_POST['comentario'];
        $consulta = $conexao -> prepare("INSERT INTO livroquatro (nome,comentario) VALUES ('$nome','$comentario')");

	$consulta -> execute();
        
	header('Location: livroQuatro.php');


?>


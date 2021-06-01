<?php
	session_start();
	include 'conecta.php';

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$consulta = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha' ";
	$resultado = $conexao->query($consulta); 
	$registros = $resultado->num_rows;
        #-------
        

	$registro_usuario = mysqli_fetch_assoc($resultado);
	//essa linha sera utilizada para criar uma Sessão do usuário

	if($registros >=1){
		$_SESSION['email'] = $registro_usuario['email'];
		$_SESSION['senha'] = $registro_usuario['senha'];
                $consulta2 = "SELECT nome FROM usuario WHERE email = '$email' AND senha = '$senha' ";
                $resultado2 = $conexao->query($consulta); 
                $registro_usuario2 = mysqli_fetch_assoc($resultado2);
                $_SESSION['nome_usu'] = $registro_usuario2['nome'];
                header('Location: home.php');
                

	}
	else{
		header('Location: index.php');
	}

  
 ?>
 
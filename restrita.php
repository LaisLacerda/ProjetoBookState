<?php
	session_start();

	if ((!isset($_SESSION['email'])==true)&&(!isset($_SESSION['senha'])==true)){
		unset($_SESSION['email']);
                unset($_SESSION['senha']);
		header('Location: login.html');
	}


	echo "AREA RESTRITA AO USUARIO LOGADO!!";




?>
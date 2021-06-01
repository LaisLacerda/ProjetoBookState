<?php
	session_start();

	if ((!isset($_SESSION['email'])==true)&&(!isset($_SESSION['senha'])==true)){
		unset($_SESSION['email']);
                unset($_SESSION['senha']);
		header('Location: index.php');
	}

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>vídeos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="zona.css"/>
    </head>
    <body>
		


<nav class="nav">
	<ul>
            <li><a href="home.php">Home</a>
    <li class="drop"><a href="sobre.php">Minha Conta</a>
		</li>
                <li><a href="logout.php">Logout</a>
                <li><a href="apagar.php">Apagar</a>
	</ul>
</nav>
<br>
<br>




    <div class="zoom">
    <figure>
<a href="https://www.amazon.com.br/zona-morta-Stephen-King/dp/8556510337"  target="_blank">
    <img id="img1_1" src="ste.jpg"></a>
<figcaption>Click no livro para comprar </figcaption>
</figure>
        </div>
<center><i id="texto">Após passar cinco anos em coma profundo, Johnny Smith, um simples professor, acorda de seu estado inconsciente não reconhecendo certos objetos. Segundo os médicos, Johnny está com uma área de seu cérebro comprometida, a qual eles chamam de Zona Morta.</i></center>
    
    <div id="coment">
        <form method="post" action="comentQuatro.php"> 
          <p>
             <textarea class="com" name="comentario" rows="4" cols="50">
  
  </textarea>
            <input type="submit" value="Comentar" /> 
          </p>
           
         <?php

include 'conecta.php';

$consulta = "SELECT nome,comentario FROM livroquatro";

//Quantos registros irão retornar????
//registros são chave==>valor  ++ nomecampo e valor

foreach ($conexao -> query($consulta) as $linha) {
        echo "Nome: ".$linha['nome'] ."<br>";
        echo "Comentario: ".$linha['comentario'] ."<br>";
	echo "<hr>";
}

?>

         
    </form>
          
          
      </div>
 




<script type="text/javascript" src="java.js"></script> 


		
		
    </body>
</html>
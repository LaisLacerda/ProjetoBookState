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
		<link rel="stylesheet" type="text/css" href="pistoleiro.css"/>
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
    <figure class="imgtorre">
<a href="https://www.amazon.com.br/Pistoleiro-Torre-Negra-Livro-ebook/dp/B00A3D8VGO/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&dchild=1&keywords=o+pistoleiro+torre+negra+livro&qid=1622388112&sr=8-1"  target="_blank">
    <img id="img1_1" src="torre.jpg"></a>
<figcaption>Click no livro para comprar </figcaption>
</figure>
        </div> <div class="sinopse">
<center><i id="texto">O pistoleiro Roland Deschain percorre o mundo em busca da famosa Torre Negra, prédio mágico que está prestes a desaparecer. Essa busca envolve uma intensa perseguição ao poderoso Homem de Preto, passagens entre tempos diferentes, encontros intensos e confusões entre o real e o imaginário. Baseado na obra literária homônima de Stephen King.</i></center>
</div>
    <div id="coment">
        <form method="post" action="comentTorre.php"> 
          <p>
             <textarea class="com" name="comentario" rows="4" cols="50">
  
  </textarea>
            <input type="submit" value="Comentar" /> 
          </p>
           
         <?php

include 'conecta.php';

$consulta = "SELECT nome,comentario FROM livrotorre";

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
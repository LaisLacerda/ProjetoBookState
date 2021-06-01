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
		<link rel="stylesheet" type="text/css" href="eden.css"/>
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
<a href="https://www.amazon.com.br/Filhos-%C3%89den-Herdeiros-Atl%C3%A2ntida-Vol/dp/8576861410/ref=asc_df_8576861410/?tag=googleshopp00-20&linkCode=df0&hvadid=379721113837&hvpos=&hvnetw=g&hvrand=12885436873907883988&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1001773&hvtargid=pla-811104532771&psc=1"  target="_blank">
    <img id="img1_1" src="eden.jpg"></a>
<figcaption>Click no livro para comprar </figcaption>
</figure>
        </div>
<center><i id="texto"> Há uma guerra no céu. O confronto civil entre o arcanjo Miguel e as tropas revolucionárias de seu irmão, Gabriel, devasta as sete camadas do paraíso. ... A missão revelará as tramas de uma conspiração milenar, um plano que, se concluído, reverterá o equilíbrio de forças no céu e ameaçará toda vida humana na terra.</i></center>
    
    <div id="coment">
        <form method="post" action="showComent.php"> 
          <p>
             <textarea class="com" name="comentario" rows="4" cols="50">
  
  </textarea>
            <input type="submit" value="Comentar" /> 
          </p>
           
         <?php

include 'conecta.php';

$consulta = "SELECT nome,comentario FROM livrodois";

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
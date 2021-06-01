<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>atualizar dados</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="atualiza.css"/>
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
<?php

include 'conecta.php';


	$email = $_POST['email'];
        $senha = $_POST['senha'];  

$consulta = "SELECT * FROM usuario WHERE email ='$email' AND senha ='$senha'";

//Quantos registros irão retornar????
//registros são chave==>valor  ++ nomecampo e valor

foreach ($conexao -> query($consulta) as $linha) {
	echo "Id: ".$linha['id'] ."<br>";
        echo "Nome: ".$linha['nome'] ."<br>";
	echo "Email: ".$linha['email'] ."<br>";
	echo "Senha: ".$linha['senha'] ."<br>";
	echo "<hr>";
}






?>


<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
     
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form action="atualiza.php" method="post"> 
          <h1>Atualização</h1> 
       
           <p> 
            <label for="nome_cad">Seu ID atual</label>
            <input id="nome_cad" name="id" required="required" type="text" placeholder="nome" />
          </p>
           
          
          <p> 
            <label for="nome_cad">Seu novo nome</label>
            <input id="nome_cad" name="nome_novo" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">Seu novo e-mail</label>
            <input id="email_cad" name="email_novo" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua nova senha</label>
            <input id="senha_cad" name="senha_novo" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Atualizar"/> 
          </p>
           
          
        </form>
      </div>
    </div>
  </div>  


		
		
    </body>
</html>
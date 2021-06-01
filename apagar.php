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
        <title>apagar dados</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="apagar.css"/>
    </head>
    <body>
		
<nav class="nav">
<ul>
    <li><a href="home.php">Home</a>
    
    <li class="drop"><a href="sobre.php">Minha Conta</a>
    </li>
                <li><a href="logout.php">Logout</a>
                <li><a href="#">Apagar</a>
	</ul>


</nav>
<br>
<br>

 <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form action="apaga.php" method="post"> 
          <h1>Excluir</h1> 
          
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="nome" />
          </p>
           
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Excluir"/> 
          </p>
           
          
        </form>
      </div>
    </div>
  </div>  
		
		
    </body>
</html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="login.css"/>
    </head>
    <body id="index">
	

<br>
<br>

 <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
        
      <div id="login">
          <form method="post" action="processa.php"> 
          <h1 id="log">Login</h1> 
          <p> 
            <label for="nome_login">Seu email</label>
            <input id="nome_login" name="email" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua senha</label>
            <input id="email_login" name="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
         
        </form>
          <p> 
              <a href="cadastro.php" > <input type="submit" value="Cadastrar"/>  </a> 
          </p>
          
      </div>
 
      
    </div>
  </div>  
		
		
    </body>
</html>

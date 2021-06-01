<?php
	session_start();

	if ((!isset($_SESSION['email'])==true)&&(!isset($_SESSION['senha'])==true)){
		unset($_SESSION['email']);
                unset($_SESSION['senha']);
		header('Location: index.php');
	}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="home.css"/>
    </head>
    <body>



<nav class="nav">
	<ul>
		<li><a href="#">Home</a>
    <li class="drop"><a href="sobre.php">Minha Conta</a>
		</li>
                <li><a href="logout.php">Logout</a>
                <li><a href="apagar.php">Apagar</a>
	</ul>
</nav>
<br>
<br>


    
    <br>
    <div class= "im12">
<div class="zoom">
    <center><a href="videos.php" ><img id="img1" src="apo.jpg" class="img-responsive"></a></center>
    <br>
    <br>
    <br>
    <br>
    <br>
    
	 
        </div>
    <div class="zoom2">
    
        <center><a href="livroEden.php" ><img id="img2" src="eden.jpg" class="img-responsive"></a></center>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
</div>
<div class="im34">
    <div class="zoom3">
    
        <center><a href="livroTorre.php" ><img id="img3" src="torre.jpg" class="img-responsive"></a></center>
        <br>
        <br>
        <br>
        <br>
        <br>
        </div>
        
    
<div class="zoom4">
    
    <center><a href="livroQuatro.php" ><img id="img4" src="ste.jpg" class="img-responsive"></a></center>
	 
        </div>

    <br>
    <br>
    <br>

    
<br>
    <br>
    <br>
</div>



		
		
    </body>
</html>

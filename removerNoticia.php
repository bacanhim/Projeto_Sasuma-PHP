<?php
include("verifica.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

   
 
  </head>
  <?php
include("headermenuAdmin.html");
?>
<body>

<div class="container">
<h1>Remover Notícia:</h1>
<form name="form1" method="post" action="removerNoticia2.php"><label for="nome">Notícia a Remover:</label>
<select name="id" id="id">
  <?php
include ("db.pedro.php");

$resultado=mysqli_query($conn,"select * from noticias");
while ($registo=mysqli_fetch_array($resultado))
{
  echo ("<option>".$registo['id']. ' || ' .$registo['titulo'].'</option><br>');
}
?>
<p>
<input type="submit" name="button" id="button" value="Remover"/>
</form>
  
</select>


<p>
  <div class="container">
    <div class="row">
  <a href="consultarNoticias.php">Consultar Notícias</a>
</div>
<div class="row">
<a href="adminNoticias.php">Voltar à entrada</a>
    </div>
</div>



</body>
</html>
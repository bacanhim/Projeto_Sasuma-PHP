<?php
include("verifica.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar notícia</title>
</head>

<body>
<div 
<?php include ("headermenuAdmin.html");
?>
<div class="container">

<h2>Alterar notícia:</h2>
<form id="form1" name="form1" method="post" action="alterarNoticia2.php">
Titulo:
<select name="id" id="id">
<?php
include "dbpedro.php";

$resultado=mysqli_query($conn,"select * from noticias");
while ($registo=mysqli_fetch_array($resultado))
{
	echo ("<option>".$registo['id']. ' || ' .$registo['titulo'].'</option><br>');
}
?>
</select>
<p>
<input type="submit" name="button" id="button" value="Alterar"/>
</form>
</div>
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
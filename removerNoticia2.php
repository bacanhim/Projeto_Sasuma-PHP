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

    <title>Remover Notícia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

   
 
  </head>
<body>
	<?php
include("headermenuAdmin.html");
?>

<div class="container">
<h2>Remover Notícia:</h2>
<?php
$id=$_POST['id'];


include ("db.pedro.php");

	$consulta1=mysqli_query($conn, "select * from noticias");
	$nr_antes=mysqli_num_rows($consulta1);
	
	$resultado=mysqli_query($conn, "delete from noticias where id='$id'");
	
	$consulta2=mysqli_query($conn, "select * from noticias");
	$nr_depois=mysqli_num_rows($consulta2);
	
	$removidos=$nr_antes - $nr_depois;
	echo 'Foram removidos: ' .$removidos. '</br>';
	if($removidos==1) {echo "<p> Notícia removida com sucesso";}
	?>
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
	
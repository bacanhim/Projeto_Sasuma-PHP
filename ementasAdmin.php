<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SASUMA - Header</title>

  <!-- BOOSTRAP -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- FONTS -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
    rel="stylesheet">

  <!--CSS -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
    <title>SASUMA- Admin Ementas</title>
    
      <?php
//inclui o ficheiro de verificação
include("verifica.php");
include('headermenuAdmin.html');
?>
 
  </head> 
  <div class="container">
 
        <a class="nav-link" href="alterarEmenta.php">Alterar Ementa</a>

        <a class="nav-link" href="consultarEmenta.php" >Consultar Ementa</a>
    </div>

  <div class="container">
		<div class="row">
		<a href="destroy.php">Sair</a>
	</div>
     </div>
</body>

	</html>
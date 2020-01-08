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
   

    <title>Inserir Notícia</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

   <?php
include("headermenuAdmin.html");
include('dbpedro.php');
?>
 
  </head>
<body>

<div class="container">
	<div class="row">
	<h4> Insira uma Notícia</h4>
	</div>
	

<form id="form1" name="form1" method="POST" action="inserirNoticia1.php">
  <p>Titulo da Notícia :<label for="titulo"></label>
  <input type="text" name="titulo" id="titulo" />
  </p><br><p>Descrição previa:</p>
  <p>
    <textarea name="prev_desc" id="prev_desc" cols="20" rows="2"></textarea>
  </p>
  </p><br><p>Descrição :</p>
  <p>
    <textarea name="descricao" id="descricao" cols="50" rows="5"></textarea>
  </p>
  </p><br><p>Importante :</p>
  <p>
  <input type="radio" id="importante" name="importante" value="1"> Sim
    <input type="radio" id="importante" name="importante" value="0"> Nao

  <label for="data"><p align="left"> Data:</p></label>
    <input type="date" name="data" id="data">
    <p>Autor da noticia :<label for="autor"></label>
  <input type="text" name="autor" id="autor" />
  <p>&nbsp;</p>
    <input name="guardar" type="submit">
    <input type="file" name="Imagem" id="Imagem" ;"/><br><br>
   
   

  </p>
</form>
</div>
</div>
  <div class="container">
    <div class="row">
<p><a href="consultarNoticias.php">Consultar Notícia </a></p>
</div>
<div class="row">
<a href="adminNoticias.php">Voltar à entrada</a>
    </div>
</div>


</body>
</html>
	
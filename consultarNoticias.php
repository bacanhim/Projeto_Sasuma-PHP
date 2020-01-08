<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sasuma- Consultar Notícias</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

   <style>


</style>
 
  </head>

  <body>
 


      <?php include ("headermenuAdmin.html");

?>

<div class="container">
<div class="row">
	 <h2>Notícias</h2>
	</div>
	<div class="row">
	<?php
  include('dbpedro.php');

                $sql = "SELECT * FROM `noticias` order by id DESC";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo"
                    <div class='col-md-12 mx-auto'>
                      <div class='NOTICIA'>
                        <div class='row'>
                    ";
                    if(strlen($row['caminho'])>0){
                      echo "
                        <div class='col-md-5'>
                          <img src=".$row['caminho']." width='mx-auto' height='450px'>
                          </div>";
                    }
                    echo "
                          <div class='col-md-7'>
                          <a href='http://localhost/sasuma/noticia/?id=".$row['id']."'>
                            <h2 class='post-title'>"
                            . $row['titulo']."
                            </h2>
                            <p class='post-meta'>
                            ". $row['prev_desc']."
                            </p>
                          </a>
                          <p class='post-meta'>Postado por:
                            <b>".$row['autor']."</b>
                            ".$row['data']."</p> </div>
                            </div>
                          </div>
                        </div><hr>";
                        }
                  } else {
                      echo "Nao exitem noticias a aprensentar.";
                  }
                  ?>

  </div>
</div>
<div class="container">
<div class="row">
<a href="adminNoticias.php">Voltar à entrada</a>
    </div>
  </div>


  </body>

</html>
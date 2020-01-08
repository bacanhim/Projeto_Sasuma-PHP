<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sasuma- Consultar Candidaturas</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	

   <style>


</style>
 
  </head>

  <body>
 


      <?php include ("headermenuAdmin.html");

?>

<div class="container">
<div class="row">
	 <h2>Candidaturas</h2>
	</div>
  

	<div class="row">
	<?php
  include('dbpedro.php');

                $sql = "SELECT * FROM `residencia` order by id ASC";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo"
                    <div class='col-md-12 mx-auto'>
                      <div class='Candidatura'>
                        <div class='row'>
                    ";
        
                    echo "
                          <div class='col-md-7'>
                        
                            <h2 class='post-nome'>"
                            . $row['nome']."
                            </h2>
                            <p class='post-meta'>
                            ". $row['apelido']."
                            </p>
                
                          <p class='post-meta'>Curso:
                            <b>".$row['curso']."</b>
                            ".$row['ano']."</b>
                            ".$row['email']."</p> </div>

                            </div>
                          </div>
                        </div><hr>";
                        }
                  } else {
                      echo "Nao exitem candidaturas a aprensentar.";
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
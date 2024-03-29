<!DOCTYPE html>
<html lang="en">
<?php
  header("Content-Type: text/html;charset=UTF-8"); 
  include("db.php");
?>

<head>

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SASUMA - UMA</title>

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

</head>

<body>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">SASUMA</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="arquivo.php">NOTÍCIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="candidatura.html">CANDIDATURA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="refeicoes.php">REFEIÇÕES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">CONTACTOS</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>UMA</h1>
            <span class="subheading">Universidade da Madeira - Serviços de Ação Social</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- MAIN CONTENT -->
  <div class="container">
    <div class="col-lg-12 text-center">
      <h2 class="mb-5">ARQUIVO DE NOTÍCIAS</h2>
      <hr>
      <!-- NOTICIA 1-->
      
              <?php 
                $sql = "SELECT * FROM `noticias` ORDER BY data DESC";
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
                            ". $row['descricao']."
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
                      echo "Nao exitem noticias a apresentar.";
                  }
                  $conn->close();
                      
                ?>
            
    </div>



    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright"><b>SASUMA &copy;</b> - Universidade da Madeira </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
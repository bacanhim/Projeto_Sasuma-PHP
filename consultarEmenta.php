<?php
include("verifica.php");
include ('headermenuAdmin.html');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alterar Ementa</title>
</head>

<body>
<div class="container">
    <div class="row">
                <div class="tg-wrap">
                    <table class="tg">
                        <tr>
                            <th class="tg-cly1">Dia</th>
                            <th class="tg-cly1">Almoco - Sopa</th>
                            <th class="tg-cly1">Almoco - Segundo Prato</th>
                            <th class="tg-cly1">Almoco - Sobremesa</th>
                            <th class="tg-cly1">Jantar - Sopa</th>
                            <th class="tg-cly1">Jantar - Segundo Prato</th>
                            <th class="tg-cly1">Jantar - Sopa</th>
                        </tr>
                        <?php
                        include 'db.php';
                        $sql = "SELECT * FROM `ementa_bar`";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "
                                                    <tr>
                                                        <td class='tg-cly1'>".$row['Dia']."</td>
                                                        <td class='tg-cly1'>".$row['almoco_sopa']."</td>
                                                        <td class='tg-cly1'>".$row['almoco_segundo_prato']."</td>
                                                        <td class='tg-cly1'>".$row['almoco_sobremesa']."</td>
                                                        <td class='tg-cly1'>".$row['jantar_sopa']."</td>
                                                        <td class='tg-cly1'>".$row['jantar_segundo_prato']."</td>
                                                        <td class='tg-cly1'>".$row['jantar_sobremesa']."</td>
                                                    </tr>
                                            ";
                            }
                        }
                        $conn->close();

                        ?>
                </div>
            </div>
        </div>
                    </div>
    </div>
        
  <div class="container">
		<div class="row">
		<a href="process.php">Voltar</a>
    </div>
</div>
  <div class="container">
		<div class="row">
		<a href="destroy.php">Sair</a>
    </div>
</div>
     <!-- Bootstrap core JavaScript -->
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0px auto;
        }

        .tg td {
            font-family: Arial, sans-serif;
            font-size: 14px;
            padding: 10px 5px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: black;
        }

        .tg th {
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            padding: 10px 5px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: black;
        }

        .tg .tg-cly1 {
            text-align: left;
            vertical-align: middle
        }

        @media screen and (max-width: 767px) {
            .tg {
                width: auto !important;
            }

            .tg col {
                width: auto !important;
            }

            .tg-wrap {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                margin: auto 0px;
            }
        }</style>
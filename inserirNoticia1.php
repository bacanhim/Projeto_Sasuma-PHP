<?php
include("verifica.php");

?>
<?php
include 'headermenuAdmin.html';
?>

<div class="conteiner">
<div class="col-md-12">
<?php
	
	$caminho='uploads/'.$_POST["Imagem"];
	$titulo=$_POST['titulo'];
    $prev_desc=$_POST['prev_desc'];
    $descricao=$_POST['descricao'];
    $data=$_POST['data'];
    $autor=$_POST['autor'];
    $importante=$_POST['importante'];

    include('db.pedro.php');


mysqli_query($conn, "INSERT INTO noticias (id, titulo, prev_desc, descricao,data,autor,caminho,importante) VALUES (NULL, '$titulo', '$prev_desc', '$descricao','$data','$autor','$caminho','$importante')");
echo "Noticia inserido com sucesso!";

?>
<br><br>
<div class="row">
<p><a href="consultarNoticias.php">Consultar Notícia </a></p>
</div>

</div>
</div>
</body>
</html>


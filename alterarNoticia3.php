<?php
include("verifica.php");

include 'headermenuAdmin.html';
?>

<?php

$id= $_POST['id'];
$titulo= $_POST['titulo'];
$prev_desc= $_POST['prev_desc'];
$descricao= $_POST['descricao'];
$importante= $_POST['importante'];
$autor= $_POST['autor'];
$data= $_POST['data'];
$caminho='uploads/'.$_POST['caminho'];

include ("dbpedro.php");

$sql = "update noticias set titulo='$titulo',prev_desc='$prev_desc', descricao='$descricao',importante='$importante',autor='$autor',data='$data',caminho='$caminho' where  id = '$id'";
$atualiza=mysqli_query($conn, $sql);
if ($atualiza==1)
{
	echo '<div class="container">';
	echo '<div class="row">';
	echo "<h4>Notícia modificada</h4>";
	echo '</div>';
	echo '</div>';
}
else
echo "Notícia não modificada";
?>
<div class="container">
<div class="row">
<p><a href="consultarNoticias.php">Consultar Notícia </a></p>
</div>
<div class="row">
<p><a href="adminNoticias.php">Voltar a entrada </a></p>
</div>
</div>
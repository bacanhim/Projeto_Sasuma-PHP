<?php
include("verifica.php");
?>
<?php
include 'headermenuAdmin.html';
?>

<?php

$Dia=$_POST['Dia'];
$almoco_sopa=$_POST['almoco_sopa'];
$almoco_segundo_prato= $_POST['almoco_segundo_prato'];
$almoco_sobremesa= $_POST['almoco_sobremesa'];
$jantar_sopa= $_POST['jantar_sopa'];
$jantar_segundo_prato= $_POST['jantar_segundo_prato'];
$jantar_sobremesa= $_POST['jantar_sobremesa'];

include ("dbpedro.php");

$sql = "update ementa_bar set almoco_sopa='$almoco_sopa',almoco_segundo_prato='$almoco_segundo_prato', almoco_sobremesa='$almoco_sobremesa',jantar_sopa='$jantar_sopa',jantar_segundo_prato='$jantar_segundo_prato',jantar_sobremesa='$jantar_sobremesa' where  Dia = '$Dia'";
$atualiza=mysqli_query($conn, $sql);
if ($atualiza==1)
{
	echo '<div class="container">';
	echo '<div class="row">';
	echo "<h4>Ementa modificada</h4>";
	echo '</div>';
	echo '</div>';
}
else
echo "Ementa não modificada";
?>
<div class="container">
<div class="row">
<p><a href="consultarEmenta.php">Consultar Ementa </a></p>
</div>
<div class="row">
<p><a href="adminNoticias.php">Voltar a entrada </a></p>
</div>
</div>
<?php
include("verifica.php");
?>
<?php
include 'headermenuAdmin.html';
?>
<?php

include("dbpedro.php");

$Dia=$_POST['Dia'];


	

$sql = mysqli_query($conn,"select * from ementa_bar where Dia='$Dia'");

while ($registo = mysqli_fetch_array($sql))
{
$almoco_sopa=$registo['almoco_sopa'];
$almoco_segundo_prato= $registo['almoco_segundo_prato'];
$almoco_sobremesa= $registo['almoco_sobremesa'];
$jantar_sopa= $registo['jantar_sopa'];
$jantar_segundo_prato= $registo['jantar_segundo_prato'];
$jantar_sobremesa= $registo['jantar_sobremesa'];
}
?>
<div class="container">
	<div class="row">
<form id="form1" name="form1" method="post" action="alterarEmenta3.php">
<table border="1">
<tr>
<td colspan="5">Ementa a alterar:</td>
</tr>
<tr>
<td width="144">Dia:</td>	
<td width="144">Almoço sopa:</td>
<td width="144">Almoco segundo prato:</td>
<td width="144">Almoco sobremesa:</td>

<tr>
<td><label>
<input name="Dia" type="text" id="Dia" value="<?php echo ($Dia);?>"/>
</label></td>
<td><label>
<input name="almoco_sopa" type="text" id="almoco_sopa" value="<?php echo ($almoco_sopa);?>"/>
</label></td>
<td><label>
<input name="almoco_segundo_prato" type="text" id="almoco_segundo_prato" value="<?php echo ($almoco_segundo_prato);?>"/>
</label></td>
<td><label>
<input name="almoco_sobremesa" type="text" id="almoco_sobremesa" value="<?php echo ($almoco_sobremesa);?>"/>
</label></td>
</tr>
<td width="144">Jantar sopa:</td>
<td width="144">Jantar segundo prato:</td>
<td width="144">Jantar sobremesa:</td>


<tr>
<td><label>
<input name="jantar_sopa" type="text" id="jantar_sopa" value="<?php echo ($jantar_sopa);?>"/>
</label></td>
<td><label>
<input name="jantar_segundo_prato" type="int" id="jantar_segundo_prato" value="<?php echo ($jantar_segundo_prato);?>"/>
</label></td>
<td><label>
<input name="jantar_sobremesa" type="text" id="jantar_sobremesa" value="<?php echo ($jantar_sobremesa);?>"/>
</label></td>
</tr>
<tr>
<td colspan="2"><label>
<input type="reset" name="reset" id="reset" value="Cancelar" /> 
</label></td>
<td colspan="2"><label>
<input type="submit" name="Alterar" id="Alterar" value="Alterar" /> 
</label></td>
</tr>
</table>
</form>
</div>
</div>
<div class="container">
<div class="row">
<a href="adminNoticias.php">Voltar a entrada</a>
</div>
</div>
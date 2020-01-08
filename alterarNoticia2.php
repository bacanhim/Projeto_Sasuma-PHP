<?php
include("verifica.php");
?>
<?php
include 'headermenuAdmin.html';
?>
<?php

include("dbpedro.php");

$form=$_POST['id'];


	

$sql = mysqli_query($conn,"select * from noticias where id='$form'");

while ($registo = mysqli_fetch_array($sql))
{
$id=$registo['id'];	
$titulo=$registo['titulo'];
$prev_desc= $registo['prev_desc'];
$descricao= $registo['descricao'];
$importante= $registo['importante'];
$autor= $registo['autor'];
$data= $registo['data'];
$caminho='uploads/'.$registo['caminho'];
}
?>
<div class="container">
	<div class="row">
<form id="form1" name="form1" method="post" action="alterarNoticia3.php">
<table border="1">
<tr>
<td colspan="5">Notícia a alterar:</td>
</tr>
<tr>
<td width="144">ID:</td>	
<td width="144">Titulo:</td>
<td width="144">Descrição prevista:</td>
<tr>
<td><label>
<input name="id" type="text" id="id" value="<?php echo ($id);?>"/>
</label></td>
<td><label>
<input name="titulo" type="text" id="titulo" value="<?php echo ($titulo);?>"/>
</label></td>
<td><label>
<input name="prev_desc" type="text" id="prev_desc" value="<?php echo ($prev_desc);?>"/>
</label></td>
</tr>
<td width="144">Descrição:</td>
<td width="144">Importante:</td>
<td width="144">Autor:</td>
<td width="144">Data:</td>

<tr>
<td><label>
<input name="descricao" type="text" id="descricao" value="<?php echo ($descricao);?>"/>
</label></td>
<td><label>
<input name="importante" type="int" id="importante" value="<?php echo ($importante);?>"/>
</label></td>
<td><label>
<input name="autor" type="text" id="autor" value="<?php echo ($autor);?>"/>
</label></td>
<td><label>
<input name="data" type="date" id="data" value="<?php echo ($data);?>"/>
</label></td>
</tr>
<tr>
<td width="144">Imagem:</td>
<td><label>
<input name="caminho" type="file" id="caminho" value="<?php echo ($caminho);?>"/>
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
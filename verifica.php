<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
//Inicia a sessão
session_start();
//verifica se há dados ativos na sessão
if(empty($_SESSION['username']))
{
	//caso não exista dados registrados, exige login
header("Location:admin.php");
}
?>
</body>
</html>
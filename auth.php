<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<?php include ("headermenuAdmin.html");

?>
<body>
<?php
//recebemos os dados digitados pelo utilizador
$username=$_POST['username'];
$password=$_POST['password'];


//estabelece a ligação à base de dados
include("dbpedro.php");

$sql="select username, categoria from user where username='$username' and password='$password'";

$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
if($num > 0){
	$registo=mysqli_fetch_array($result);
	$categoria=$registo['categoria'];
	$username=$registo['username'];

	//Inicia a sessão
	Session_start();

	//regista os dados do utilizador na sessão
	$_SESSION['username']=$username;
	$_SESSION['categoria']=$categoria;

	//redireciona para a página respetiva
	if($categoria=='admin'){
			header("Location:process.php");
	}
	else if($categoria=='admin'){
		header("Location:process.php");
	}
}
else{
	echo"<b> Não foi encontrado nenhum utilizador com os dados introduzidos. </b>";
	echo "<meta http-equiv='refresh' content='3;URL=admin.php'>";
}
?>
</body>

</html>
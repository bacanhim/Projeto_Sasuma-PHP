<?php
include "db.php";
$nome = $_POST["nome"];
$sobrenome = $_POST["apelido"];
$email = $_POST['email'];
$curso = $_POST['curso'];
$ano = $_POST['ano'];
$name = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";

if (empty($nome) || empty($sobrenome) || empty($email)) {
    echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Preencher todos os campos para prosseguir</b>
			</div>
		";
    exit();
} else {
    if (!preg_match($name, $nome)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Este nome: '$nome' não é valido..!</b>
			</div>
		";
        exit();
    }
    if (!preg_match($name, $sobrenome)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Este sobrenome: '$sobrenome' não é valido..!</b>
			</div>
		";
        exit();
    }
    if (!preg_match($emailValidation, $email)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Este Email: '$email' não é valido..!</b>
			</div>
		";
        exit();
    }
    $sql = "SELECT email FROM residencia WHERE email = '$email' LIMIT 1";
    $check_query = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Este Email: '$email' já está registado, introduza outro.</b>
			</div>
		";
        exit();
    } else {
        $sql = " INSERT INTO `residencia`(`nome`, `apelido`, `curso`, `ano`, `email`) VALUES ('$nome', '$sobrenome','$curso','$ano','$email');";
        if (mysqli_query($conn, $sql)) {
            echo "register_success";
            exit();
        }
    }
}

?>























































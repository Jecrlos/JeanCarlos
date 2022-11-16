<?php 
require_once("conexao.php");
session_start();

if(!isset($_POST['email']) OR $_POST['email'] === '' OR !isset($_POST['cpf']) OR $_POST['cpf'] === '' or !isset($_POST['senha']) OR $_POST['senha'] === '') {
    $_SESSION['msg'] = "Informe um E-mail ou CPF válido!";
    header("Location: ../view/cadastro.php");
    exit;
}

$email = trim($_POST['email']);
$cpf   = trim($_POST['cpf']);
$senha   = trim($_POST['senha']);

$sql = "SELECT email, cpf FROM usuario where email = '$email' OR cpf = '$cpf'";
$consulta = mysqli_query($conexao, $sql);

if($consulta->num_rows > 0) {
    $_SESSION['msg'] = "Já existe um usuário com o E-mail ou CPF informado!";
    header("Location: ../view/cadastro.php");
    exit;
}
   


$sql = "INSERT INTO usuario (email, cpf, senha) VALUES ('$email', '$cpf', '$senha')";

if($conexao->query($sql) === true) {
    header("Location: ../view/usuario.php");
} else {
    header("Location: ../view/cadastro.php");
}
?>
<?php 
require_once("conexao.php");

    // $sql = "DELETE FROM autor_livro where cod_livro = $_GET[idLivro]";
    // $conexao->query($sql)

    
    $sql = "DELETE FROM autor_livro where  cod_livro = $_GET[idLivro]";
    $conexao->query($sql);
    $sql = "DELETE FROM genero_livro where  cod_livro = $_GET[idLivro]";
    $conexao->query($sql);
    $sql = "DELETE FROM livro_compra where  cod_livro = $_GET[idLivro]";
    $conexao->query($sql);
    $sql = "DELETE FROM livro where cod_livro = $_GET[idLivro]";
    $conexao->query($sql);
   

    if($conexao->query($sql) === true) {
        header("location: ../view/_home.php");
    }
  
?>
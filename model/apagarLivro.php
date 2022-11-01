<?php 
require_once("conexao.php");

    // $sql = "DELETE FROM autor_livro where cod_livro = $_GET[idLivro]";
    // $conexao->query($sql)

    $sql = "DELETE FROM livro where cod_livro = $_GET[idLivro]";
    
    $sql = "DELETE FROM livro where qtd_estoque = $_GET[idLivro]";
    

    $sql = "DELETE FROM livro where  nome = $_GET[idLivro]";
    

    $sql = "DELETE FROM livro where img = $_GET[idLivro]";
    

    $sql = "DELETE FROM livro where preco = $_GET[idLivro]";
    

    $sql = "DELETE FROM livro where  cod_editora = $_GET[idLivro]";
  
?>
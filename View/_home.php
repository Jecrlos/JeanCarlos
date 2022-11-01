<?php
  require_once("../model/conexao.php");
  require_once("cabecalho.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_cabeçalho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <title>Livraira-B  uyBooks</title>
</head>
<body>
<div id="carouselExampleControlsNoTouching" class="carousel slide mt-5 mb-5" data-bs-touch="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/carrossel/img4.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/carrossel/img2webp.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/carrossel/img3.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div >
  <div style=" display: flex; justify-content: center;"><h1>Livros Mais Vendidos</h1></div>
  <div class="carousel slide mt-5 mb-5"style="display: flex; flex-direction: row; margin-top: 25px;">
  <?php

		$pesquisa= 'select livro_compra.cod_livro, livro.nome, count(*) qtd_compra, preco, img from livro_compra inner join livro on livro.cod_livro = livro_compra.cod_livro group by cod_livro order by qtd_compra desc;';
	
			$pesquisa = mysqli_query($conexao, $pesquisa);	
			while ($row_pesquisa =  mysqli_fetch_assoc($pesquisa)) {
			?>
	<div style="display: flex; flex-direction: colunm;  ">
    <div calss="div1 text-center rounded m-3"style=" padding: 5%;margin: 5%; width: 28vh; heigth: 38vh;  ">
    <a href="../model/apagarLivro.php?idLivro=<?= $row_pesquisa['cod_livro']?>" style="float: right; text-decoration: none; color: black;">Apagar</a>
    <img style="width: 100%; "src="../Img/Livros/<?php echo $row_pesquisa['img']?>">
			<p>Nome: <?php echo $row_pesquisa['nome']?></p>
			<p style=" position:absolute; bottom:0px; ">Preço <?php echo $row_pesquisa['preco']?></p>
		</div>
    
  </div>
	<?php
      }
 ?>
 </div>
</div>
</body>
</html>
<?php
require_once("rodape.php");
?>







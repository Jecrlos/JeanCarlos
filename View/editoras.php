<?php
  require_once("../model/conexao.php");
  require_once("cabecalho.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_cabeçalho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <title>BuyBooks-Editoras</title>
</head>
<body>
<?php $pesquisa= 'select * from editora;';
	
  $pesquisa = mysqli_query($conexao, $pesquisa);	
  while ($row_pesquisa =  mysqli_fetch_assoc($pesquisa)) {
  ?>
<div style="display: flex; flex-direction: row;  ">
<div calss="div1 text-center rounded m-3"style=" padding: 5%; width: 22%;  ">
<img style="width: 100%; "src="../Img/Editoras/<?php echo $row_pesquisa['img']?>">
  <p>Nome: <?php echo $row_pesquisa['nome_editora']?></p>
  
</div>

</div>
<?php
  }
?>
</body>
</html>
<?php
require_once("rodape.php");
?>

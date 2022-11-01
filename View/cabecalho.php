
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo_cabeçalho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
</head>
<body>
<header> 
<nav class="navbar bg-dark" >
  <div class="container-fluid">
    <div><a  href="_home.php" class="navbar-brand w-25"><img src="../img/logo_livraria.png" alt="brenon é lindo " class="w-25"></a></div>
    
    <form class="d-flex" role="search">
      <input class="form-control me-2 w-100" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end w-25 ">
        <a href="usuario.php"><button type="button" class="btn btn-light">Usuario</button></a>
        <a href="cadastro.php"><button type="button" class="btn btn-light" >Cadastro</button></a>
        <a href="Carrinho.php"><button type="button" class="btn btn-light w-50"><img src="../img/carrinho_compra.png" alt="brenon é lindo" class="w-100"></button></a>
    </div>
  </div>
</nav>
<div class="btn-group w-100" role="group" aria-label="Basic outlined example">
  <a href="livros.php" class="btn btn-outline-dark">Livros</a>
  <a href="editoras.php" class="btn btn-outline-dark">Editoras</a>  
  <a href="generos.php" class="btn btn-outline-dark">Generos</a>
</div>
</header>
</body>
</html>
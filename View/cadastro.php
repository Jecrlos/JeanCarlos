<?php
  require_once("../model/conexao.php");
  require_once("cabecalho.php");
   session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <title>Livraria-Cadastro</title>
</head>
<body>

<section class="get-in-touch">
   <h1 class="title">Cadastre-se</h1>
   <?php 
      if(isset($_SESSION['msg'])) {
   ?>
         <div class="alert alert-danger text-center" role="alert">
            <?php echo $_SESSION['msg'] ?>
         </div>
   <?php 
         session_destroy();
      }
   ?>
   <form method="post" action="../model/cadastrarUsuario.php" class="contact-form row">
     <div class="form-field col-lg-12">
        <input name="email" id="message" class="input-text js-input" type="text" required>
        <label class="label" for="message">E-mail</label>
     </div>
     <div class="form-field col-lg-6">
         <input name="senha" id="name" class="input-text js-input" type="text" required>
         <label class="label" for="name">Senha</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input name="cpf" id="company" class="input-text js-input" type="text" required>
         <label class="label" for="company">Cpf</label>
      </div>
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
</section>


</body>
</html>
<?php
require_once("rodape.php");
?>

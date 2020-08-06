<?php

require_once("funcoes.php");
adiciona();

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/cadastro.css">
    <link rel="stylesheet" href="icons">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Cadastro de Funcionários</title>
</head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <a href="index.php"> <img src="icons/back.svg" alt="" width="30" height="30"> </a>
        </div>
        <div class="col-8">
          <h1>Cadastro de Funcionário</h1>
        </div>
      </div>
      
     
    </div>

    <form action="cadastro.php" method="post">
      <div class="container campos">
        <div class="row campoalto">
          <div class="col-7">
            <input type="text" name="funcionario['nome']" class="form-control" placeholder="Nome">
          </div>
          <div class="col">
            <input type="text" name="funcionario['cpf']" class="form-control" placeholder="CPF" oninput="mascara(this)">
            
          </div>
        </div>

        <div class="row campobaixo">
          <div class="col">
            <input type="text" name="funcionario['genero']" class="form-control" placeholder="Gênero">
          </div>
          <div class="col">
            <input type="date" name="funcionario['data]" class="form-control" placeholder="Data de nascimento">
          </div>
        </div>

        <button type="submit" class="btn btn-success">Cadastrar</button>
      </div>
  
</form>

    <script src ="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

  </body>
</html>

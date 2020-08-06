<?php

require_once("funcoes.php");
editar();

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/alterar.css">
    <link rel="stylesheet" href="icons">
    <script type="text/javascript" src="js/script.js"></script>
    <title>Editar de Funcionários</title>
</head>
<body>

<div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <a href="index.php"> <img src="icons/back.svg" alt="" width="30" height="30"> </a>
        </div>
        <div class="col-8">
          <h1>Atualização de Funcionário</h1>
        </div>
      </div>

<form action="alterar.php?codigo=<?php echo $funcionario['codigo']; ?>" method="post">
      <div class="container campos">
        <div class="row campoalto">
          <div class="col-8">
          <input type="text" class="form-control" name="funcionario['nome']" value="<?php echo $funcionario['nome']; ?>" placeholder="Nome">
          </div>
          <div class="col">
            <input type="text" name="funcionario['cpf']" value="<?php echo $funcionario['cpf']; ?>" class="form-control" placeholder="CPF" oninput="mascara(this)">
            
          </div>
        </div>

        <div class="row campobaixo">
          <div class="col">
            <input type="text" name="funcionario['genero']" value="<?php echo $funcionario['genero']; ?>" class="form-control" placeholder="Gênero">
          </div>
          <div class="col">
            <input type="date" name="funcionario['data]" value="<?php echo $funcionario['data']; ?>" class="form-control" placeholder="Data de nascimento">
          </div>
        </div>

        <button type="submit" class="btn btn-success">Salvar alteração</button>
      </div>
  
</form>
</body>
</html>

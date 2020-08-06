<?php
require_once('funcoes.php');
index();

?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/listar.css">
    <link rel="stylesheet" href="icons">
    <title>Cadastro de Funcionários</title>
</head>

<body>
<div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <a href="index.php"> <img src="icons/back.svg" alt="" width="30" height="30"> </a>
        </div>
        <div class="col-8">
          <h1>Funcionários Cadastradados</h1>
        </div>
      </div>

<div class="container">
<table>
    <div class="row">
      <div class="col">
      <td class="coluna">Nome</td>
      </div>

      <div class="col">
      <td class="coluna">CPF</td>
      </div>

      <div class="col">
      <td class="coluna">Genero</td>
      </div>

      <div class="col">
      <td class="coluna">Data</td>
      </div>

      <div class="col">
      <td class="coluna">Opções</td>
      </div>

    </div>
        
    

    <?php if ($funcionarios) : ?>
    <?php foreach ($funcionarios as $funcionario) : ?>
        <tr>
            <td class="linha"><?php echo $funcionario['nome'];?></td>
            <td class="linha"><?php echo $funcionario['cpf'];?></td>
            <td class="linha"><?php echo $funcionario['genero'];?></td>
            <td class="linha"><?php echo $funcionario['data'];?></td>
            <td class="opcoes"> <a href="alterar.php?codigo=<?php echo $funcionario['codigo'];?>"> <img src="icons/refresh.svg" alt="" width="25" height="25"></a>
            <a href="deletar.php?codigo=<?php echo $funcionario['codigo'];?>"><img src="icons/delete.svg" alt="" width="25" height="25"></a> </td>
           
          </tr>
          
          <?php endforeach; ?>
    <?php else : ?>

    <tr>
        <td>Nenhum registro encontrado</td>
    </tr>
    <?php endif; ?>
    
</table>
<ul><a href="cadastro.php">Adicionar Funcionário  <img src="icons/more.svg" alt="" width="15" height="15"> </a></ul>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>

  </body>
</html>

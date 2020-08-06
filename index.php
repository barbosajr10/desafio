<?php
require_once 'inc/config.php';
require_once DBAPI;

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/index.css">
        <title>Cadastro de Funcionários</title>
    </head>
    <body>

        <div class="container">
            <div class="row title">
                <h3>Gerenciamento de Funcionários</h3>
            </div>
            <div class="row botoes">
              <div class="col-3">
                <a type="button" href="cadastro.php" class="btn btn-primary">Cadastro</a>
              </div>

              <div class="col-3">
                <a type="button" href="listagem.php" class="btn btn-info">Listagem</a>
              </div>
            </div>

        </div>
        <?php  session_start();
        if (isset($_SESSION['message'])) {
           echo $_SESSION['message']; 
            unset($_SESSION['message']);
        }
        

        $db = abre_banco();

        if ($db) {
            echo '<div class="alert alert-success" role="alert">
            Banco de dados Conectado
          </div>';
        } else {
          echo '<div class="alert alert-danger" role="alert">
          Banco de dados Desconectado
        </div>';
        }
    ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    </body>
</html>

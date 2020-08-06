<?php
require_once("inc/config.php");
require_once(DBAPI);

$funcionario = null;
$funcionarios = null;


function adiciona() {
    if (!empty($_POST['funcionario'])) {
        $funcionario = $_POST['funcionario'];
        cadastrar('funcionarios',$funcionario);
        header('location: listagem.php');
    }
}

function index() {
    global $funcionarios;
    $funcionarios = listar_tudo('funcionarios');
}

function editar() {
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
        if (isset($_POST['funcionario'])) {
            $funcionario = $_POST['funcionario'];
            atualizar('funcionarios', $codigo, $funcionario);
            header('location: index.php');
        } else {
            global $funcionario;
            $funcionario = listar('funcionarios', $codigo);
        }
    } else {
        header('location: index.php');
    }
}

function deletar($codigo = null){
    global $funcionario;
    $funcionario = remover('funcionarios', $codigo);
    header('location: listagem.php');
}

?>
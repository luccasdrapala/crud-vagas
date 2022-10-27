<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Editar Vaga');

use \App\Entity\Vaga;

//validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('Location: index.php?status=erro');
    exit;
}

//CONSULTA VAGA PELO ID
$obVaga = Vaga::getVaga($_GET['id']);

//validação da vaga
if(!$obVaga instanceof Vaga) {
    header('Location: index.php?status=erro');
}


//validação do post
if(isset($_POST['titulo'],$_POST['descricao'], $_POST['ativo'])){

  
    $obVaga->titulo    = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo     = $_POST['ativo'];
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}


include __DIR__.'/includes/header.php'; //cabeçalho
include __DIR__.'/includes/formulario-update.php';
include __DIR__.'/includes/footer.php';//rodapé

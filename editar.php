<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

//validação do ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('Location: index.php?status=erro');
    exit;
}

$obVaga = Vaga::getVaga($_GET['id']);
print_r($obVaga);

//validação do post
if(isset($_POST['titulo'],$_POST['descricao'], $_POST['ativo'])){

    $obVaga = new Vaga;
    $obVaga->titulo    = $_POST['titulo'];
    $obVaga->descricao = $_POST['descricao'];
    $obVaga->ativo     = $_POST['ativo'];
    $obVaga->cadastrar();

    header('location: index.php?status=success');
    exit;
}


include __DIR__.'/includes/header.php'; //cabeçalho
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';//rodapé

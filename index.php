<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;

$vagas = Vaga::getVagas();

include __DIR__.'/includes/header.php'; //cabeçalho
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';//rodapé


<?php

namespace App\Entity;

class Vaga {

    /**
     * identificador unico da vaga
     * @var integer
     */
    public $id;

    /**
     * titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descricao da vaga (text no html)
     * @var string
     */
    public $descricao;

    /**
     * Define se a vaga esta ativa
     * @var string (s/n)
     */
    public $ativo;

    /**
     * Defina a data da criaçao da vaga
     * @var string (timestamp)
     */
    public $data;

}


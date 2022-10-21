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

    /**
     * método responsável por cadastrr uma vaga no bd
     * @return boolean
     */
    public function cadastrar(){
        //definir data
        $this->data = date ('Y-m-d H:i:s');

        //inserir vaga no banco

        //atribuir o id da vaga na instancia

        //retornar sucesso
    }
}


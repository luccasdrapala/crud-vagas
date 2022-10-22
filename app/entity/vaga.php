<?php

namespace App\Entity;
use App\Db\Database;

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
        $obDatabase = new Database('vagas');
        $this-> id =$obDatabase->insert([
                        'titulo'    =>$this->titulo,
                        'descricao' =>$this->descricao,
                        'ativo'     =>$this->ativo,
                        'data'      =>$this->data 
                    ]);

        echo '<pre>';
        print_r($obDatabase);
        echo '</pre>';

        //atribuir o id da vaga na instancia


        //retornar sucesso
    }
}


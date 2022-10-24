<?php

namespace App\Entity;
use App\Db\Database;
use PDO;

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

        return true;
    }
    /**
     * Método responsável por obter as vagas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array 
     */

    public static function getVagas($where = null, $order = null, $limit = null) {
        return( new Database('vagas'))->select($where, $order, $limit)
        ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}


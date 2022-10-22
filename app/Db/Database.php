<?php

namespace App\Db;

use PDO;
use PDOException;

class Database {

    //host de conexao com o db
    const HOST = 'localhost';
    const NAME = 'wdev_vagas';
    const USER = 'root';
    const PASS = '';

    private $table; //para trabalhar com uma tabela especifica

    private $connection;

    //define a tablea e instancia a conexão
    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection(){

        try {
            $this->connection = new PDO('mysql:host='. self::HOST .';dbname='. self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //(valor a se alterar, valr que o atributo vai receber)

        } catch (PDOException $e) {
            die('ERROR: '.$e->getmessage());
        }
    }

    /**
     * metodo responsavel por inserir dados no banco
     * @param array [field => value]
     * @return integer (id inserido)
     */
    public function insert($values){
        //dados da query
        $fields = array_keys($values);
        // print_r($fields);
        $binds = array_pad([], count($fields),'?'); //seta um array de determinado tamanho, caso seja menor ele cria no tamanho setado (array, tamanho, novo valor caso tamanho do array seja menor que o tamanho)

        //monta a query
        $query = 'INSERT INTO '. $this->table.' ('.implode(',', $fields).') VALUES ('.implode(',', $binds).')';

        echo $query;
        exit;
    }

}
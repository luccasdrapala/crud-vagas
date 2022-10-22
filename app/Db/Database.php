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

}
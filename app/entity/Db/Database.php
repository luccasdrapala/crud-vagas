<?php

namespace App\Db;

use PDO;

class Database {

    //host de conexao com o db
    const HOST = 'localhost';
    const NAME = 'wdev_vagas';
    const USER = 'root';
    const PASS = '';

    private $table; //para trabalhar com uma tabela especifica

    private $conection = new PDO();

}
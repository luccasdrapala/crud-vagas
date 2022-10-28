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
     * Metodo responsavel por executar queries dentro do bd
     * @param string $query
     * @param array $params
     * @return PDOStatement
     */
    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch(PDOException $e) {
            die('ERROR: '. $e->getmessage());
        }
    }

    /**
     * metodo responsavel por inserir dados no banco
     * @param array $values [field => value]
     * @return integer (id inserido)
     */
    public function insert(array $values):int { //:int aguarda um int como retorno
        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields),'?'); //seta um array de determinado tamanho, caso seja menor ele cria no tamanho setado (array, tamanho, novo valor caso tamanho do array seja menor que o tamanho)

        //monta a query
        $query = 'INSERT INTO '. $this->table.' ('.implode(',', $fields).') VALUES ('.implode(',', $binds).')';

        //executa o insert
        $this->execute($query, array_values($values));

        return $this->connection->lastInsertId();
    }

    /**
     * Método responsável por efetuar o select no banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @param string $fields
     * @return PDOStatement 
     */
    public function select($where = null, $order = null, $limit = null, $fields = '*'){
        //dados da query 
        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER BY '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        //montando a query
        $query = 'SELECT '.$fields.' FROM '.$this->table.' '.$where.' '.$order.' '.$limit;
        
        return $this->execute($query);
    }

    public function delete($where) {
        $query = 'DELETE FROM '.
    }

    /**
     * Metodo responsavel por executar update no banco
     * @param string $where
     * @param array $values [field => value]
     * @return boolean
     */
    public function update($where, $values){
        //dados da query
        $fields = array_keys($values); //transforma chave do array no valor e sua chave fica numerica
        
        //montando query
        $query = 'UPDATE '.$this->table.' SET '.implode('=?,', $fields).'=? WHERE '.$where; 
        $this->execute($query, array_values($values));
    }
}
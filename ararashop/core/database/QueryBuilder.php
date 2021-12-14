<?php

namespace App\Core\Database;

use PDO;
use Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this -> pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function select()
    {

    }

    public function insertCategoria($table, $parametro)
    {
        $sql = "insert into `{$table}` (nome) values ('{$parametro['nome']}')";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function updateCategoria($table, $nome, $id){
        $sql = "update `{$table}` set nome='{$nome}' where id = {$id}";
       

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function edit()
    {
         
    }

    public function delete($table, $idp)
    {
        $sql = "delete from {$table} where id = {$idp}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function read()
    {
      
    }
}

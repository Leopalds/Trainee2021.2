<?php

namespace App\Core\Database;

use PDO;
use Exception;
class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
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

    public function insert()
    {
    }

    public function edit()
    {
    }

    public function delete($table, $idprod)
    {

      $sql = "DELETE FROM `produtos` WHERE id = {$idprod}";

      try 
      {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

      }

      catch (Exception $e)
      {

         die($e->getMessage());

      }
      
    }

    public function read()
    {
    }
}
?>
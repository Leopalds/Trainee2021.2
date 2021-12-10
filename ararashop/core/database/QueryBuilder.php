<?php

namespace App\Core\Database;

use PDO;
use Exception;
class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this-> pdo = $pdo;
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


    public function insert($table, $parametros)
    {

      $sql = "INSERT INTO `produtos` (nome, descricao, preco, categoria, imagem) VALUES ('{$parametros['nome']}','{$parametros['descricao']}','{$parametros['preco']}','{$parametros['categoria']}','{$parametros['imagem']}')";


      try 
      {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();


          return $stmt->fetchAll(PDO::FETCH_CLASS);
      }

      catch (Exception $e)
      {

         die($e->getMessage());

      }
      
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
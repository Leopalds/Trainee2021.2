<?php

namespace App\Core\Database;

use PDO;

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

    public function insert($table, $parametros)
    {

      $sql = "INSERT INTO `produtosadm` (nome, descricao, preco, categoria, imagem) VALUES ('{$parametros['nome']}','{$parametros['descricao']}','{$parametros['preco']}','{$parametros['categoria']}','{$parametros['imagem']}')";


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

    public function delete($table, $idproduto)
    {

      $sql = "DELETE FROM `produtosadm` WHERE id = {$idproduto}";

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

    public function select()
    {

    }

    public function edit()
    {
         
    }

    public function read()
    {
      
    }
}

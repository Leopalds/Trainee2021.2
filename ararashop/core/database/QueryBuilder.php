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

    public function insertprodutos($table, $parametros)
    {

      $sql = "INSERT INTO `produtos` (nome, descricao, preco, categoria, imagem) VALUES ('{$parametros['nome']}','{$parametros['descricao']}','{$parametros['preco']}','{$parametros['categoria']}','{$parametros['imagem']}')";


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

    public function deleteprodutos($table, $idproduto)
    {

      $sql = "DELETE FROM `produtos` WHERE id = {$idproduto}";

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

    public function updateprodutos($table, $parametros, $idproduto)
    {

      $sql = "UPDATE `produtos` SET `nome`='{$parametros['nome']}', `descricao`='{$parametros['descricao']}', `preco`='{$parametros['preco']}', `categoria`='{$parametros['categoria']}' ";

      if (isset($parametros['imagem']) && $parametros['imagem'] != "")
        {
            $sql .=  ", `imagem`='{$parametros['imagem']}'";
        }

        $sql .= " WHERE `id`= '{$idproduto}' ";
      

      

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

    public function selectAlldesc($table)
    {
      $sql = "SELECT * FROM {$table} ORDER BY id DESC LIMIT 6";

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

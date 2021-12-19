<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosController
{
    public function home()
    {
        $produtos = App::get('database')->selectAlldesc('produtos');
        return view('site/home', compact("produtos")); 
    } 

    public function produtoscatalogo()
    {

        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        } else {
            $pagina = 1;
        }
        if (isset($_GET['search']) && isset($_GET['categoria']))
        {
            $search = $_GET['search'];
            $categoria = $_GET['categoria'];
            $produtos = app::get('database')->produtocategoria('produtos', $search, $categoria);
        }
        else if(isset($_GET['search']))
        {
            $search = $_GET['search'];
            $produtos = app::get('database')->searchprodutos('produtos', $search);
        }
        else if(isset($_GET['categoria']))
        {
            $categoria = $_GET['categoria'];
            $produtos = app::get('database')->categoriacatalogo('produtos', $categoria);
        }
        else
        {
        $produtos = App::get('database')->selectAll('produtos');
        }

        $total_produtos = App::get('database') ->numLinhas('produtos');

        $total_paginas = ceil($total_produtos / 9);

        $produtos = App::get('database') ->paginacao('produtos', $pagina - 1, 9);

        return view('site/produtos', compact('produtos', 'pagina', 'total_paginas'));

        // $produtos = App::get('database')->selectAll('produtos');
        // return view('site/produtos', compact("produtos")); 
        
        $categorias = App::get('database')->selectAll('categorias');
        return view('site/produtos', compact("produtos","categorias")); 
    }

    public function produtos()
    {
        include('verificalogin.php');

        if(isset($_GET['search']))
        {
            $search = $_GET['search'];
            $produtos = app::get('database')->searchprodutos('produtos', $search);
        }
        else
        {
        $produtos = App::get('database')->selectAll('produtos');
        }
        $categorias = App::get('database')->selectAll('categorias');
        return view('admin/produtos', compact("produtos","categorias")); 

        
    }

    public function createprodutos()
    {
 
         $parameters = [
             'nome' => $_POST['nome'],
             'descricao' => $_POST['descricao'],
             'preco' => $_POST['preco'],
             'categoria' => $_POST['categoria'],
             'imagem' => $_POST['imagem']
         ];

         app::get('database')->insertprodutos('produtos', $parameters);
         
         header('location: /admin/produtos');

    }

    public function deleteprodutos()
    {

        app::get('database')->deleteprodutos('produtos', $_POST['id']);
        header('location: /admin/produtos');  
 
    }

    public function updateprodutos()
    {

        $parameters = [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'categoria' => $_POST['categoria'],
            'imagem' => $_POST['imagem']
        ];

        app::get('database')->updateprodutos('produtos', $parameters, $_POST['id']);
        header('location: /admin/produtos'); 
        
    }

    public function viewproduto(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } else {
            return view('site/produto');
        }

        // $colunas = App::get('database')->selectAll('produtos');

        // die(var_dump($colunas));

        $produto = App::get('database')->selectProduto('produtos', $id);
        if($produto != NULL) {
            $produto = $produto[0];
        } else {
            return view('site/produto');
        }

        //die(var_dump($produto));
        
        return view('site/produto', compact('produto', 'id')); 
    }
    
    public function searchprodutos()
    {
        $search = $_GET['search'];

        $produtos = app::get('database')->searchprodutos('produtos', $search);
        $categorias = App::get('database')->selectAll('categorias');
        return view('admin/produtos', compact('produtos','categorias')); 
    }

    public function categoriacatalogo()
    {
        $categoria = $_GET['categoria'];

        $produtos = app::get('database')->categoriacatalogo('produtos', $categoria);
        $categorias = App::get('database')->selectAll('categorias');
        return view('site/produtos', compact('produtos','categorias')); 
    }

    public function produtocategoria()
    {
        $search = $_GET['search'];
        $categoria = $_GET['categoria'];

        $produtos = app::get('database')->produtocategoria('produtos', $search, $categoria);
        $categorias = App::get('database')->selectAll('categorias');
        return view('site/produtos', compact('produtos','categorias')); 
    }



    public function show()
    {

    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    
}
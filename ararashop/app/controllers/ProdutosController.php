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
        $produtos = App::get('database')->selectAll('produtos');
        $categoriasexemplo = App::get('database')->selectAll('categoriasexemplo');
        return view('site/produtos', compact("produtos","categoriasexemplo")); 
    }

    public function produtos()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categoriasexemplo = App::get('database')->selectAll('categoriasexemplo');
        return view('admin/produtos', compact("produtos","categoriasexemplo")); 

        
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

    public function searchprodutos()
    {
        $search = $_GET['search'];

        $produtos = app::get('database')->searchprodutos('produtos', $search);
        $categoriasexemplo = App::get('database')->selectAll('categoriasexemplo');
        return view('admin/produtos', compact('produtos','categoriasexemplo')); 
    }

    public function searchcatalogo()
    {
        $search = $_GET['search'];

        $produtos = app::get('database')->searchcatalogo('produtos', $search);
        return view('site/produtos', compact('produtos')); 
    }

    public function categoriacatalogo()
    {
        $categoria = $_GET['categoria'];

        $produtos = app::get('database')->categoriacatalogo('produtos', $categoria);
        return view('site/produtos', compact('produtos')); 
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
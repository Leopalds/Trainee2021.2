<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{
    public function home()
    {
        $produtosadm = App::get('database')->selectAlldesc('categoriasexemplo');
        return view('site/home', compact("produtosadm")); 
    } 

    public function produtos()
    {
        $produtosadm = App::get('database')->selectAll('produtosadm');
        return view('site/produtos', compact("produtosadm")); 
    }

    public function ADMprodutos()
    {

        $categoriasexemplo = App::get('database')->selectAll('categoriasexemplo');
        $produtosadm = App::get('database')->selectAll('produtosadm');
        return view('admin/ADMprodutos', compact("produtosadm","categoriasexemplo")); 

        
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

         app::get('database')->insertprodutos('produtosadm', $parameters);
         
         header('location: /ADMprodutos');

    }

    public function deleteprodutos()
    {

        app::get('database')->deleteprodutos('produtosadm', $_POST['id']);
        header('location: /ADMprodutos');  
 
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

        app::get('database')->updateprodutos('produtosadm', $parameters, $_POST['id']);
        header('location: /ADMprodutos'); 
        
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
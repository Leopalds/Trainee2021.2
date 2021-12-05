<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PagesController
{
    public function home()
    {
        return view('site/home'); 
    }

    public function produtos()
    {
        return view('site/produtos'); 
    }

    public function ADMprodutos()
    {

        $produtosadm = App::get('database')->selectAll('produtosadm');

        
        return view('admin/ADMprodutos', compact("produtosadm")); 
    }

    public function create()
    {
 
         $parameters = [
             'nome' => $_POST['nome'],
             'descricao' => $_POST['descricao'],
             'preco' => $_POST['preco'],
             'categoria' => $_POST['categoria'],
             'imagem' => $_POST['imagem']
         ];

         app::get('database')->insert('produtosadm', $parameters);
         
         header('location: /ADMprodutos');

    }

    public function delete()
    {

        app::get('database')->delete('produtosadm', $_POST['id']);
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

    public function update()
    {
        
    }
}
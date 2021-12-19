<?php 

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriasController {

    public function viewadmcategorias(){

        include('verificalogin.php');

        if(isset($_GET['pagina'])){
            $pagina = $_GET['pagina'];
        } else {
            $pagina = 1;
        }

        if (isset($_GET['search']))
        {
            $search = $_GET['search'];
            $categorias = App::get('database') ->searchcategorias('categorias', $search, $pagina - 1, 10, '', '');
        }
        else
        {
            $categorias = App::get('database') ->paginacao('categorias', $pagina - 1, 10, '', '');
        }

        $total_categorias = App::get('database') ->numLinhas('categorias', '', '');

        $total_paginas = ceil($total_categorias / 10);

        // $categorias = App::get('database') ->paginacao('categorias', $pagina - 1, 10, '', '');

        return view('admin/viewadmcategorias', compact('categorias', 'pagina', 'total_paginas'));
    }

    public function create(){

        
        $parameters = [

            'nome' => $_POST['nome']
        ];
        app::get('database')->insertCategoria('categorias', $parameters);

        header('Location: /admin/categorias');
    }

    public function update(){

        $idp = $_POST['id'];
        $nome = $_POST['nome'];
        
        app::get('database')->updateCategoria('categorias', $nome, $idp);

        header('Location: /admin/categorias');
    }

    public function delete(){

        $idp = $_POST['id'];

        app::get('database')->delete('categorias', $idp);

        header('Location: /admin/categorias');
    }

    // public function searchcategorias()
    // {
    //     $search = $_GET['search'];

    //     $categorias = App::get('database')->searchcategorias('categorias', $search);
    //     return view('admin/categorias', compact('categorias')); 
    // }
    
}

// class Paginação{

//     public function cres() {

//     }
// }


?>



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

        $total_categorias = App::get('database') ->numLinhas('categorias', '', '');

        $total_paginas = ceil($total_categorias / 10);

        $categorias = App::get('database') ->paginacao('categorias', $pagina - 1, 10, '', '');

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
    
}

// class Paginação{

//     public function cres() {

//     }
// }


?>



<?php 

namespace App\Controllers;

use App\Core\App;
use Exception;

class CategoriasController {

    public function viewadmcategorias(){

        $categorias = App::get('database') ->selectAll('categorias');

        

        return view('admin/viewadmcategorias', compact('categorias'));
    }

    public function create(){

        
        $parameters = [

            'nome' => $_POST['nome']
        ];
        app::get('database')->insertCategoria('categorias', $parameters);

        header('Location: /viewadmcategorias');
    }

    public function update(){

        $idp = $_POST['id'];
        $nome = $_POST['nome'];
        
        app::get('database')->updateCategoria('categorias', $nome, $idp);

        header('Location: /viewadmcategorias');
    }

    public function delete(){

        $idp = $_POST['id'];

        app::get('database')->delete('categorias', $idp);

        header('Location: /viewadmcategorias');
    }
    
}


?>



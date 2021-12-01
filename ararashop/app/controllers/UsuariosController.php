<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    public function index()
    {
       
    }

    public function usuarios()
    {

        $tb_adm_usuarios = App::get('database')->selectAll('tb_adm_usuarios');
        $tables = [

            'tb_adm_usuarios' => $tb_adm_usuarios,

        ];

        return view('admin/view-adm-usuarios', $tables);
    }
    

    public function show()
    {

    }

    public function create()
    {
        $parametros = [

            'nome' => $_POST['nome']
        ];

        app::get('database')->insert('tb_adm_usuarios', $parametros);
        header('Location: /admin/view-adm-usuarios');
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

    public function delete()
    {
 
    }
}
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

        $parameters = [

            'nome' => $_POST['nome'],
            'senha' => $_POST['senha'],
            'informacoes' => $_POST['informacoes'],
            'foto_perfil' => $_POST['foto_perfil']
        ];
        app::get('database')->insert('tb_adm_usuarios', $parameters);

        header('Location: /admin/usuarios');
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
        app::get('database')->delete('tb_adm_usuarios', $_POST['id']);
        header('Location: /admin/usuarios');
    }
}
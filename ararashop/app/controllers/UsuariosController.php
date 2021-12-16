<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UsuariosController
{
    public function index()
    {
        
    }

    public function contato(){
        return view('site/contato');
    }

    public function usuarios()
    {

        $usuarios = App::get('database')->selectAll('usuarios');
        $tables = [

            'usuarios' => $usuarios,

        ];

        return view('admin/usuarios', $tables);
    }
    

    public function showusuario()
    {
        $parameters = [

            'nome' => $_GET['nome'],
            'email' => $_GET['email'],
            'senha' => $_GET['senha'],
            'informacoes' => $_GET['informacoes'],
            'foto_perfil' => $_GET['foto_perfil']
        ];


        app::get('database')->select($_GET['id'], 'usuarios', $parameters)->get();

        header('Location: /admin/usuarios');
    }

    public function createusuario()
    {

        $parameters = [

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'informacoes' => $_POST['informacoes'],
            'foto_perfil' => $_POST['foto_perfil']
        ];
        app::get('database')->insert('usuarios', $parameters);

        header('Location: /admin/usuarios');
    }
    public function store()
    {

    }

    public function edit()
    {
        
    }

    public function updateusuario()
    {
        $parameters = [

            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'informacoes' => $_POST['informacoes'],
            'foto_perfil' => $_POST['foto_perfil']
        ];
        app::get('database')->edit($_POST['id'], 'usuarios', $parameters);

        header('Location: /admin/usuarios');  
    }

    public function deleteusuario()
    {
        app::get('database')->delete('usuarios', $_POST['id']);
        header('Location: /admin/usuarios');
    }
}
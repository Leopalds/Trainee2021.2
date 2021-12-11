<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function index()
    {

    }

    public function login()
    {
        $usuarios = App::get('database')->selectAll('usuarios');
        $tables = [

            'usuarios' => $usuarios,

        ];

        return view('admin/login', $tables);
    }

    public function loginvalidacao()
    { 

        $parameters = [

            'email' => $_GET['email'],
            'senha' => $_GET['senha']
        ];

        $retorno = app::get('database')->login($parameters, 'login_adm');

        print_r($retorno);

        if($retorno > 0 )
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: /admin/dashboard');
        }
        else{
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);

            header('Location: /admin/login');

        }
    }

    public function show()
    {

    }

    public function create()
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

    public function delete()
    {
 
    }
}
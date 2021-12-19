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
        session_start();
        include('conexao.php');
    
        if(empty($_POST['email']) || empty($_POST['senha'])) {
            header('Location: /admin/login');
            exit();
        }

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $query = "select id from usuarios where email = '{$email}' and senha = '{$senha}' "; 

        $result = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($result);

        if($row == 1){
            $_SESSION['email'] = $email;
	        header('Location: /admin/dashboard');
	        exit();
        } else {
	        $_SESSION['nao_autenticado'] = true;
	        header('Location: /admin/login');
	        exit();
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
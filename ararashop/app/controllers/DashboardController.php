<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class DashboardController
{
    public function index()
    {
        
    }

    public function dash()
    {
        include('verificalogin.php');
        return view('admin/dashboard');
    }

    public function sair()
    {
        session_start();
        session_destroy();

        header('Location: /admin/login');
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
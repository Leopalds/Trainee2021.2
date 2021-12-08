<?php
    use App\Core\Router;

    $router->get('admin/usuarios', 'UsuariosController@usuarios');

    $router->post('admin/usuarios/create', 'UsuariosController@createusuario');

    $router->post('admin/usuarios/delete', 'UsuariosController@deleteusuario');

    $router->post('admin/usuarios/update', 'UsuariosController@updateusuario');

    $router->get('admin/usuarios/show', 'UsuariosController@showusuario');

    $router->post('admin/login', 'LoginController@login');

?>

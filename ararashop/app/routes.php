<?php
    use App\Core\Router;

    $router->get('admin/usuarios', 'UsuariosController@usuarios');

    $router->post('tb_adm_usuarios/create', 'UsuariosController@create');
?>

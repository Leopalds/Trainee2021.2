<?php
    use App\Core\Router;

    $router->get('admin/usuarios', 'UsuariosController@usuarios');

    $router->post('tb_adm_usuarios/create', 'UsuariosController@create');

    $router->post('tb_adm_usuarios/delete', 'UsuariosController@delete');

    $router->post('tb_adm_usuarios/update', 'UsuariosController@update');

    $router->get('tbm_adm_usuarios/show', 'UsuariosController@show');

?>

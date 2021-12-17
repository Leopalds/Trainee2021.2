<?php
    use App\Core\Router;

    $router->get('admin/usuarios', 'UsuariosController@usuarios');

    $router->post('admin/usuarios/create', 'UsuariosController@createusuario');

    $router->post('admin/usuarios/delete', 'UsuariosController@deleteusuario');

    $router->post('admin/usuarios/update', 'UsuariosController@updateusuario');

    $router->get('admin/usuarios/show', 'UsuariosController@showusuario');

    $router->get('admin/login', 'LoginController@login');

    $router->post('admin/login/validacao', 'LoginController@loginvalidacao');

    $router->get('admin/dashboard', 'DashboardController@dash');

    $router->get('admin/dashboard/logout', 'DashboardController@sair');

    $router->get('', 'ProdutosController@home');
    $router->get('produtos', 'ProdutosController@produtoscatalogo');
    $router->get('admin/produtos', 'ProdutosController@produtos');

    $router->post('produtos/createprodutos','ProdutosController@createprodutos');
    $router->post('produtos/deleteprodutos','ProdutosController@deleteprodutos');
    $router->post('produtos/updateprodutos','ProdutosController@updateprodutos');
    

    $router->get('admin/categorias', 'CategoriasController@viewadmcategorias');

    $router->post('admin/categorias/create', 'CategoriasController@create');

    $router->post('admin/categorias/delete', 'CategoriasController@delete');

    $router->post('admin/categorias/update', 'CategoriasController@update');

?>
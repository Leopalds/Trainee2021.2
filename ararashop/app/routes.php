<?php

    $router->get('admin/categorias', 'CategoriasController@viewadmcategorias');

    $router->post('admin/categorias/create', 'CategoriasController@create');

    $router->post('admin/categorias/delete', 'CategoriasController@delete');

    $router->post('admin/categorias/update', 'CategoriasController@update');

?>
<?php

    $router->get('viewadmcategorias', 'CategoriasController@viewadmcategorias');

    $router->post('categorias/create', 'CategoriasController@create');

    $router->post('categorias/delete', 'CategoriasController@delete');

    $router->post('categorias/update', 'CategoriasController@update');

?>
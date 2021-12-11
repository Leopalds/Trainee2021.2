<?php

use App\Core\Router;

    $router->get('', 'ProdutosController@home');
    $router->get('produtos', 'ProdutosController@produtoscatalogo');
    $router->get('admin/produtos', 'ProdutosController@produtos');

    $router->post('produtos/createprodutos','ProdutosController@createprodutos');
    $router->post('produtos/deleteprodutos','ProdutosController@deleteprodutos');
    $router->post('produtos/updateprodutos','ProdutosController@updateprodutos');
    

?>
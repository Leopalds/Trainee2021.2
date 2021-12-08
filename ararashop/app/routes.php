<?php

use App\Core\Router;

    $router->get('', 'PagesController@home');
    $router->get('produtos', 'PagesController@produtos');
    $router->get('ADMprodutos', 'PagesController@ADMprodutos');

    $router->post('produtosadm/createprodutos','PagesController@createprodutos');
    $router->post('produtosadm/deleteprodutos','PagesController@deleteprodutos');
    $router->post('produtosadm/updateprodutos','PagesController@updateprodutos');
    

?>
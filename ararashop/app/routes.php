<?php

use App\Core\Router;

    $router->get('home', 'PagesController@home');
    $router->get('produtos', 'PagesController@produtos');
    $router->get('ADMprodutos', 'PagesController@ADMprodutos');

    $router->post('produtosadm/create','PagesController@create');
    $router->post('produtosadm/delete','PagesController@delete');
    

?>
<?php

    use App\Core\Router;
    
    $router->get('home', 'PagesController@home');
    $router->get('produtos', 'PagesController@produtos');
    $router->get('admProdutos', 'PagesController@admProdutos');

    $router->post('admin/create','PagesController@create');
    $router->post('admin/delete','PagesController@delete');
?>
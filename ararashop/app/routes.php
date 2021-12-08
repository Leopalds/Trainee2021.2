<?php

    use App\Core\Router;
    
    $router->get('home', 'PagesController@home');
    $router->get('user/produtos', 'PagesController@produtos');
    $router->get('admin/produtos', 'PagesController@admProdutos');
    $router->get('admin/dashboard', 'PagesController@admDashboard');


    $router->post('admin/create','PagesController@create');
    $router->post('admin/delete','PagesController@delete');
?>
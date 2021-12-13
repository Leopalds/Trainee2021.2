<?php

    use App\Core\Router;
    
    $router->get('', 'PagesController@home');
    $router->get('user/produtos', 'PagesController@produtos');
    $router->get('admin/produtos', 'PagesController@admProdutos');
    $router->get('admin/dashboard', 'PagesController@admDashboard');


    $router->post('admin/produtos/create','PagesController@create'); //mudar isso nas pages
    $router->post('admin/produtos/delete','PagesController@delete');
    $router->post('admin/produtos/update','PagesController@update');
    $router->post('admin/produtos/search','PagesController@search');
?>
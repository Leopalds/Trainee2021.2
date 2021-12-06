<?php
    $router->get('home', 'PagesController@home');
    $router->get('produtos', 'PagesController@produtos');
    $router->get('admProdutos', 'PagesController@admProdutos');

    $router->post('produtosadm/create','PagesController@create');
    $router->post('produtosadm/delete','PagesController@delete');
?>
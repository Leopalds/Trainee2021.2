<?php
    use App\Core\Router;

    $router->get('', 'PagesController@index');
    $router->get('produtos', 'PagesController@produtos');
?>
<?php
define('host', '127.0.0.1');
define('username', 'root');
define('password', '');
define('name', 'araarashop');

$conexao = mysqli_connect(host, username, password, name) or die ('Não foi possível conectar');
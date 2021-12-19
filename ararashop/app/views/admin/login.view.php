<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../../public/css/navbarfooter.css" rel="stylesheet">
    <link href="../../../public/css/login.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ff7700;" height="90px">
        <a href="#" class="navbar-left"><img src="../../public/img/logo-ara-ara.png" width="150px" height="90px" padding-top="-10px" padding-bottom="-10px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link " href="/" role="button" aria-haspopup="true" aria-expanded="false">
                        HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/quemsomos" role="button" aria-haspopup="true" aria-expanded="false">
                        QUEM SOMOS
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/produtos" role="button" aria-haspopup="true" aria-expanded="false">
                        PRODUTOS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato" role="button" aria-haspopup="true" aria-expanded="false">
                        CONTATO
                    </a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Ex: Camisa naruto" aria-label="Ex: Camisa naruto">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="/admin/login">
                    <img src="../../public/img/iconeconta.png" width="30" height="30" alt="conta">
                </a>
            </nav>
            <nav class="navbar navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="../../public/img/iconecompras.png" width="30" height="30" alt="carrinho">
                </a>
            </nav>
        </div>
        </li>
        </ul>
        </div>
    </nav>



    <?php
    if (isset($_SESSION['nao_autenticado'])) :
    ?>
        <div class="erro">
            <p>Erro: email ou senha inválidos</p>
        </div>
    <?php
    endif;
    unset($_SESSION['nao_autenticado']);
    ?>

    <div class="container-logar">
        <div class="container container-form">
            <form action="/admin/login/validacao" method="POST">
                <div class="form-group">
                    <label style="font-size: 20px;" for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="akeno@hotmail.com">

                </div>
                <div class="form-group">
                    <label style="font-size: 20px;" for="exampleInputEmail">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="***********">
                </div>
                <div class="form-group form-check">

                    <input type="checkbox" class="form-check-input checkbox-rememberme" id="exampleCheck1">
                    <label class="form-check-label remember-me" for="exampleCheck1" style="font-size:20px; color: #fbfbfb !important;">Lembrar de mim</label>
                </div>
                <button type="submit" style="background-color: #ff7700; border-color: #343A40;" class="btn btn-primary">Entrar</button>
            </form>

            <img src="../../../public/img/login_imgs/gif_login.gif" alt="gif_login" srcset="">
        </div>

        <!--
        <img src="../../public/img/login_imgs/itachi-img.png" class="img-fluid rounded float-left" alt="itachi-img">
        <img src="../../public/img/login_imgs/jiraya-img.png" class="img-fluid rounded float-right" alt="jiraya-img">
-->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
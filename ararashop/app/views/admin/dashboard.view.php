<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../..//public/css/dashboard.css">
    <link rel="stylesheet" href="../..//public/css/navbar-adm.css">
    <title>Dashboard Admin</title>
</head>
<body>
    <?php require 'navbarAdm.html'; ?>
   
    <div class="container">
            <div class="main1"></div>
            <div class="menu">
                <div class="menu-content">
                    <div class="menu-title">
                        <img src="../../public/img/tanjnezu.png"> 
                        <h2>Dashboard samurai</h2>
                    </div> 
                    <div class="elementos">
                        <ul>
                            <li><a href="/admin/produtos"><button id="botaoprod">Produtos</button></a></li>
                            <li><a href="/admin/categorias"><button id="botaocat">Categorias</button></a></li>
                            <li><a href="/admin/usuarios"><button id="botaousu">Usuários</button></a></li>
                        </ul>
                    </div>

                    <div class="sair">
                        <a href="/admin/dashboard/logout"><button id="botaosair">Sair</button></a>
                    </div>

                    <div class="menu-foot">
                        <a href="https://www.youtube.com/watch?v=5Agee8BzqwI&ab_channel=shinya"><img src="../../public/img/inosuke2.png"></a>
                    </div>
                </div>
            </div>    
        <div class="main2"></div>     
    </div>
       
    <script type="text/javascript" src="../../public/js/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
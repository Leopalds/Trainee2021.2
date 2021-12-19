<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link href="../../public/css/navbar-adm.css" rel="stylesheet">
    <script src="../../public/js/navbarAdm.js"></script>

    <link rel="stylesheet" href="../../../public/css/viewadmcategorias.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">


    <title>Categorias ADM</title>
</head>

<body>

    <?php require 'navbar.php'?>

    <div class="categorias-adm col-12">

        <div class="row">
            <form class="form-inline my-2 my-lg-0 barra-de-pesquisa">
                <input class="form-control mr-sm-2" type="search" placeholder="Ex: Conjuntos" aria-label="Ex: Conjuntos">
                <button class="btn btn-white my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>


            <?php require 'modal/categorias/adiciona.view.php' ?>

            <button type="button" class="btn-lg btn-block modal-adiciona-categoria" data-toggle="modal" data-target="#modal-adiciona-categoria">Adicionar Categoria +</button>

            <div class="lista-de-categorias">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOME</th>
                            <th scope="col">AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $categoria) : ?>
                            <?php require 'modal/categorias/edit.view.php' ?>
                            <?php require 'modal/categorias/visualiza.view.php' ?>
                            <?php require 'modal/categorias/deleta.view.php' ?>
                            <tr>
                                <th scope='row'><?= $categoria->id ?></th>
                                <td> <?= $categoria->nome ?> </td>

                                <td>
                                    <ul>
                                        <li><button id=<?php $categoria->id ?> class='btn btn-outline-dark' data-toggle='modal' data-target='#edita-categoria-<?= $categoria->id ?>'><i class='fas fa-edit'></i></button>
                                        </li>

                                        <li><button id=<?php $categoria->id ?> class='btn btn-outline-dark' data-toggle='modal' data-target='#visualiza-categoria-<?= $categoria->id ?>'><i class='fas fa-eye'></i></button>
                                        </li>

                                        <li><button id=<?php $categoria->id ?> class='btn botao-deleta-categoria btn-outline-dark' data-toggle='modal' data-target='#deleta-categoria-<?= $categoria->id ?>'><i class='fas fa-trash-alt'></i></button>
                                        </li>
                                    </ul>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


            <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class='page-item'><a class='page-link' href='/admin/categorias?pagina=<?= 1?>'>Primeira</a></li>
                    <?php if($pagina - 2 > 0){ ?>
                    <li class='page-item'><a class='page-link' href='/admin/categorias?pagina=<?= $pagina - 2?>'><?= $pagina - 2?></a></li>
                    <?php } if($pagina - 1 > 0){ ?>
                    <li class='page-item'><a class='page-link' href='/admin/categorias?pagina=<?= $pagina + 1?>'><?= $pagina - 1?></a></li>
                    <?php } ?>
                    <li class='page-item active'><a class='page-link' href='/admin/categorias?pagina=<?= $pagina?>'><?= $pagina?></a></li>
                    <?php if($pagina + 1 <= $total_paginas){ ?>
                    <li class='page-item'><a class='page-link' href='/admin/categorias?pagina=<?= $pagina + 1?>'><?= $pagina + 1?></a></li>
                    <?php } if($pagina + 2 <= $total_paginas){ ?>
                    <li class='page-item'><a class='page-link' href='/admin/categorias?pagina=<?= $pagina + 1?>'><?= $pagina + 2?></a></li>
                    <?php } ?>
                    <li class='page-item'><a class='page-link' href='/admin/categorias?pagina=<?= $total_paginas?>'>Última</a></li>
                </ul>
            </nav>

        </div>

    </div>


    <script src="https://kit.fontawesome.com/5d99e3d3ae.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../../public/js/paginacaoadmcategorias.js"></script>


</body>

</html>
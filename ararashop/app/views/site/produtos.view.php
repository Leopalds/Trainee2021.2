<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping - Catálogo Completo Ara Ara Shop</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/viewprodutos.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">   

</head>
<body>

    
    <div class="container">

             <div class="menufiltro">

                  <div class="input-group barrabusca">
                    <input type="search" class="form-control rounded" placeholder="Digite aqui" aria-label="Search"
                    aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-white">Buscar</button>
                  </div>

                  <div class="dropdown menumenu">
                    <button class="btn btn-outline-dark btn-rounded btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">Produto
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu listamenu">
                      <!-- <li><a class="filtroselect" chref="#">HTML</a></li> -->
                      <li><a class="filtroselect" href="#">Camisas</a></li>
                      <li><a class="filtroselect" href="#">Moletons</a></li>
                      <li><a class="filtroselect" href="#">Conjuntos</a></li>
                      <li><a class="filtroselect" href="#">Cosplays</a></li>
                      <li><a class="filtroselect" href="#">Brindes</a></li>
                    </ul>
                  </div>

                  <div class="dropdown menumenu">
                    <button class="btn btn-outline-dark btn-rounded btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">Animes
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu listamenu">
                      <!-- <li><a class="filtroselect" chref="#">HTML</a></li> -->
                      <li><a class="filtroselect" href="#">Naruto</a></li>
                      <li><a class="filtroselect" href="#">Jujutsu Kaizen</a></li>
                      <li><a class="filtroselect" href="#">Konosuba</a></li>
                      <li><a class="filtroselect" href="#">Attack on Titan</a></li>
                      <li><a class="filtroselect" href="#">Demon Slayer</a></li>
                      <li><a class="filtroselect" href="#">Dragon Ball</a></li>
                      <li><a class="filtroselect" href="#">Hunter X Hunter</a></li>
                      <li><a class="filtroselect" href="#">Kaguya-sama</a></li>
                      <li><a class="filtroselect" href="#">Boku no Hero</a></li>
                    </ul>
                  </div>

                  <div class="dropdown menumenu">
                    <button class="btn btn-outline-dark btn-rounded btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">Cor
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu listamenu">
                      <!-- <li><a class="filtroselect" chref="#">HTML</a></li> -->
                      <li><a class="filtroselect" href="#">Preto</a></li>
                      <li><a class="filtroselect" href="#">Branco</a></li>
                      <li><a class="filtroselect" href="#">Azul</a></li>
                      <li><a class="filtroselect" href="#">Roxo</a></li>
                      <li><a class="filtroselect" href="#">Verde</a></li>
                      <li><a class="filtroselect" href="#">Vermelho</a></li>
                      <li><a class="filtroselect" href="#">Laranja</a></li>
                      <li><a class="filtroselect" href="#">Amarelo</a></li>
                      <li><a class="filtroselect" href="#">Rosa</a></li>
                    </ul>
                  </div>

                  <div class="dropdown menumenu">
                    <button class="btn btn-outline-dark btn-rounded btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">Tamanho
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu listamenu">
                      <!-- <li><a class="filtroselect" chref="#">HTML</a></li> -->
                      <li><a class="filtroselect" href="#">PP</a></li>
                      <li><a class="filtroselect" href="#">P</a></li>
                      <li><a class="filtroselect" href="#">M</a></li>
                      <li><a class="filtroselect" href="#">G</a></li>
                      <li><a class="filtroselect" href="#">GG</a></li>
                      <li><a class="filtroselect" href="#">XG</a></li>
                      <li><a class="filtroselect" href="#">XGG</a></li>
                    </ul>
                  </div>

              </div>

            <div class="row d-flex flex-wrap justify-content-center card-deck card-columns cadiv">
  
                <?php foreach ($produtos as $produtoad) : ?>
                <a class="linkproduto" href="/produto?id=<?= $produtoad->id?>">
                  <div class="card m-2 ccprod" style="width: 18rem;">
                      <img class="card-img-top img-responsive cim" src="../../public/img/produtos/<?= $produtoad->imagem ?>" alt="Card image cap">
                      <div class="card-body">
                      <p class="card-text nomeproduto"><?= $produtoad->nome ?></p>
                      <p class="card-text precoproduto"> R$ <?= number_format($produtoad->preco ,2,',') ?></p>
                      <p class="card-text categoriaproduto">Produto: <?= $produtoad->categoria ?></p>
                      </div>
                  </div>
                </a>
                <?php endforeach; ?>
  
            </div>
                
            <nav class="d-flex justify-content-center" aria-label="Page navigation example">
                <ul class="pagination">
                    <li class='page-item'><a class='page-link' href='/produtos?pagina=<?= 1?>'>Primeira</a></li>
                    <?php if($pagina - 2 > 0){ ?>
                    <li class='page-item'><a class='page-link' href='/produtos?pagina=<?= $pagina - 2?>'><?= $pagina - 2?></a></li>
                    <?php } if($pagina - 1 > 0){ ?>
                    <li class='page-item'><a class='page-link' href='/produtos?pagina=<?= $pagina - 1?>'><?= $pagina - 1?></a></li>
                    <?php } ?>
                    <li class='page-item active'><a class='page-link' href='/produtos?pagina=<?= $pagina?>'><?= $pagina?></a></li>
                    <?php if($pagina + 1 <= $total_paginas){ ?>
                    <li class='page-item'><a class='page-link' href='/produtos?pagina=<?= $pagina + 1?>'><?= $pagina + 1?></a></li>
                    <?php } if($pagina + 2 <= $total_paginas){ ?>
                    <li class='page-item'><a class='page-link' href='/produtos?pagina=<?= $pagina + 2?>'><?= $pagina + 2?></a></li>
                    <?php } ?>
                    <li class='page-item'><a class='page-link' href='/produtos?pagina=<?= $total_paginas?>'>Última</a></li>
                </ul>
            </nav>
  
    </div> <!-- Fim container -->
              
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

            















          








    


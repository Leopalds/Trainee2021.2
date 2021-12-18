<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopping - Catálogo Completo Ara Ara Shop</title>
        <?php require 'header.php' ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../../public/css/viewprodutos.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">   
        
</head>
<body>

     <?php require 'navbar.php' ?>

    
    <div class="container">

             <div class="menufiltro">

                    <form action="/produtos" method="GET">
                      <div class="input-group barrabusca">
                        <input type="search" name="search" value="<?= $_GET['search'] ?? null ?>" class="form-control rounded" placeholder="Digite aqui" aria-label="Search"
                        aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-white">Buscar</button>
                      </div>
                    <!-- </form> -->

                    <!-- <form action="/produtos" method="GET"> -->
                      <div class="dropdown menumenu">
                        <button class="btn btn-outline-dark btn-rounded btn-lg btn-block dropdown-toggle" type="button" data-toggle="dropdown">Busca por Categoria
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu listamenu">
                            <?php foreach ($categorias as $cat) : ?>
                           
                            <li class="filtroselect"><button type="submit" value="<?= $cat->nome ?>" name="categoria"><?= $cat->nome ?></button></li>
  
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      </form>

              </div>

            <div class="row d-flex flex-wrap justify-content-center card-columns cadiv">
  
                <?php foreach ($produtos as $produtoad) : ?>
                <a class="linkproduto" href="#">
                  <div class="card m-2 align-baseline ccprod" style="width: 16rem;">
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
                
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center navpgit">
                <li class="page-item pgit">
                  <a class="page-link pgit" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link pgit" href="#">1</a></li>
                <li class="page-item"><a class="page-link pgit" href="#">2</a></li>
                <li class="page-item"><a class="page-link pgit" href="#">3</a></li>
                <li class="page-item pgit">
                  <a class="page-link pgit" href="#">Próxima</a>
                </li>
              </ul>
            </nav>
  
    </div> <!-- Fim container -->

    <?php require 'footer.php' ?>
              
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

            















          








    


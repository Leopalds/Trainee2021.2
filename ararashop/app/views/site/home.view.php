      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Ara Ara Shop - Home</title>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
          <link rel="stylesheet" href="../../public/css/home.css">
          <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
          

      </head>

      <body>
          
          <div class="container">

              <div class="ccaacc">

                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img class="d-block w-100 slidehome" src="../../public/img/carousel/aashcum.gif" alt="First slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100 slidehome" src="../../public/img/carousel/aashcdois.gif" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100 slidehome" src="../../public/img/carousel/aashctres.gif" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100 slidehome" src="../../public/img/carousel/aashcquatro.gif" alt="Fourth slide">
                      </div>
                      </div>

                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      </a>
                  </div>


                  <div class="banner">
                      <img src="../../public/img/bnbnatt.png">
                  </div>
                  <br><br>


                  <div class="rowcar d-flex flex-wrap justify-content-center">

                       <?php foreach ($produtosadm as $produtoad) : ?>

                       <div class="card m-2" style="width: 16rem;">
                          <img class="card-img-top" src="../../public/img/produtos/<?= $produtoad->imagem ?>" alt="Imagem de capa do card">
                          <div class="card-body">
                            <h5 class="card-title"><?= $produtoad->nome ?></h5>
                            <p class="card-text"> R$ <?= number_format($produtoad->preco ,2,',') ?></p>
                            <a href="#" class="btn btn-primary quadradin">Conferir agora!</a>
                          </div>
                        </div>

                       <?php endforeach; ?>

                  </div>


                  <div class="callaction">

                      <a href="#"><img src="../../public/img/quemsomosatt.png" alt="Quem somos?"></a>
                      <br><br>
                      <a href="#"><img src="../../public/img/contatoatt.png" alt="Contato"></a>
                      <br><br><br>
          
                  </div>

              </div>

          </div>


          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
 
      </html>
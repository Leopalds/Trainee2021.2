<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>
    <link href="../../public/css/contato.css" rel="stylesheet">

    <title>Contato</title>
</head>

<body>

    <div class="caminho">
        <ul>
            <li><a href="home.html" style="color: #fbfbfb !important">Home</a></li>
            <li> > </li>
            <li>Login</li>
        </ul>
    </div>

    <div class="title">
        <img class="img-fluid" src="../../public/img/logo-ara-ara.png" alt="logo-ara-ara">
        <h1>Contato </h1>
        <hr>
    </div>

    <div class="container-fluid content-container">


        <div class="contact">
            <h2 class="div-tittle">Alguma dúvida? Fale conosco!</h2>
            <form action="/contato/enviarEmail" method="POST">

            <div class="row d-flex">
                    <div class="form-group col-12">
                        <label for="formControlImputName">Nome</label>
                        <input type="text" name="nome"class="form-control" id="nameFormInput" placeholder="Violet Evergarden">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlInput1">Seu Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="hinata@example.com">
                    </div>
                    <div class="form-group col-12">
                        <label for="formControlImputName">Assunto</label>
                        <input type="text" name="assunto" class="form-control" id="nameFormInput" placeholder="Exame Hunter">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlTextarea1">Digite sua mensagem!</label>
                        <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3" placeholder="Onde esta o One Piece?"></textarea>
                    </div>
                    <div class="form-group col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-lg btn-secondary">Enviar</button>
                    </div>
                </div>

            </form>
        </div>


        <div class="social-media">
            <h2 class="div-tittle">Nossas Redes!</h2>
            <ul>
                <li>
                    <a href="https://twitter.com/oednaldopereira/status/1451997273899077643 " target="_blank ">
                        <img src="../../public/img/imgs_contato/twitter.png" alt="img-twitter">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/ZecaPagodinhoOficial" target="_blank">
                        <img src="../../public/img/imgs_contato/facebook.png" alt="img-facebook">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/p/CVISZ-eLFdd/" target="_blank">
                        <img src="../../public/img/imgs_contato/instagram.png" alt="img-instagram">
                    </a>
                </li>
                <br>
                <li>
                    <span class="d-inline-block">Tel: (32) 98868-1028</span></li>
            </ul>
        </div>



    </div>

    <div class="container-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.139460868239!2d-43.35196755009029!3d-21.77486288552834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b69c914a28f%3A0xf85b3ff7e358eecf!2sBar%20do%20Zezinho!5e0!3m2!1spt-BR!2sbr!4v1635478808285!5m2!1spt-BR!2sbr"
            allowfullscreen></iframe>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
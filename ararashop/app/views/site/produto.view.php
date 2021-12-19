<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="../../public/css/viewproduto.css">
    <link rel="stylesheet" href="../../public/css/navbarfooter.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <title>View Produto</title>



</head>

<body>

    <?php require 'navbar.php' ?>

    <div class="container mt-5 mb-5">
        <?php if(isset($produto)) : ?>
        <div class="container-fluid ">
            <div class="row">


                <img src="../../public/img/produtos/<?= $produto->imagem ?>" class="imagem-produto" alt="Moletom Konoha">


                <div class="informacoes-do-produto col-md-auto">

                    <p><?= $produto->nome ?></p>
                    <p><span>R$<?= number_format($produto->preco * 1.5, 2, ',') ?></span>R$<?= number_format($produto->preco, 2, ',') ?></p>

                    <p class="escolha-o-tamanho">ESCOLHA O TAMANHO:</p>
                    <div class="form-tamanho">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                            <label class="form-check-label" for="inlineRadio1">PP</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                            <label class="form-check-label" for="inlineRadio2">P</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="opcao3">
                            <label class="form-check-label" for="inlineRadio3">M</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="opcao4">
                            <label class="form-check-label" for="inlineRadio4">G</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="opcao5">
                            <label class="form-check-label" for="inlineRadio5">GG</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">QUANTIDADE:</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-lg btn-block">ADICIONAR AO CARRINHO</button>
                    <button type="button" class="btn btn-lg btn-block botao-comprar" class="botao-de-compra">COMPRAR</button>
                </div>

                <div class="detalhes-do-produto">
                    <div class="col-md-auto">
                        <p>Prazo de confecção/postagem: 03 a 07 dias úteis.</p>

                        <p>(O prazo de confecção passa a valer no dia útil seguinte após a confirmação do pagamento)</p>

                        <p><?= $produto->descricao?></p>

                        <p>Não desbota, pode lavar e passar.</p>

                        <p>Observações: Imagem meramente ilustrativa. </p>
                        <p>O Produto real pode sofrer leves alterações de proporção em relação à amostra. </p>
                        <p>As tonalidades das cores podem variar de acordo com o seu monitor.</p>

                        <p>NÃO TRABALHAMOS COM PRONTA ENTREGA.</p>

                    </div>
                </div>

                <div class="produtos-relacionados">
                    
                </div>
            </div>
        </div>
        <?php else : ?>
            <div class="alert alert-danger erro" role="alert">
                Produto não encontrado!!
            </div>
        <?php endif; ?>     
    </div>

    <?php require 'footer.php' ?>

    <script src="../../public/js/zoomimagem.js">

    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    
    <link rel="stylesheet" href="../../../public/css/navbar-adm.css">
    <script src="../../../public/js/navbarAdm.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="../../../public/css/viewadmcategorias.css">

    <title>Categorias ADM</title>
</head>

<body>






    <div class="categorias-adm col-12">

        <div class="row">
            <form class="form-inline my-2 my-lg-0 barra-de-pesquisa">
                <input class="form-control mr-sm-2" type="search" placeholder="Ex: Conjuntos"
                    aria-label="Ex: Conjuntos">
                <button class="btn btn-white my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>


            <div class="modal-adiciona-categoria"><button type="button" class="btn-lg btn-block" data-toggle="modal"
                    data-target=".adiciona-categoria">Adicionar Categoria +</button>
            </div>


            <div class="modal fade bd-example-modal-xl adiciona-categoria" tabindex="-1" role="dialog"
                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="adiciona-categoria">
                <div class="modal-dialog modal-xl modal-grande">
                    <div class="modal-content conteudo-modal">
                        <div class="form-group formulario-modal">

                            <h1>Adicionar categoria</h1>

                            <hr>
                            

                            <label for="exampleFormControlTextarea1">Nome da categoria</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                        </div>

                        <div class="form-group formulario-modal">
                            <label for="exampleFormControlTextarea1">Descrição</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <h2>Cor da categoria:</h2>

                        <div class="seletor-de-cor">
                            <input type="color" id="head" name="head" value="#ff7700">
                            <label for="head">Head</label>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">FECHAR</button>
                            <button type="button" class="btn  botao-salvar">ADICIONAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>



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
                        <tr>
                            <th scope="row">1</th>
                            <td> AoT </td>

                            <td>
                                <ul>
                                    <li><button class="btn btn-outline-dark" data-toggle="modal"
                                            data-target=".edita-categoria"><i class="fas fa-edit"></i></button>
                                        <div class="modal fade bd-example-modal-xl edita-categoria" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            id="edita-categoria">
                                            <div class="modal-dialog modal-xl modal-grande">
                                                <div class="modal-content conteudo-modal">
                                                    <div class="form-group formulario-modal">
                                                        <h1>Editar Categoria</h1>

                                                        <hr>

                                                        <label for="exampleFormControlTextarea1"> Nome da
                                                            categoria </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="1"></textarea>
                                                    </div>

                                                    <div class="form-group formulario-modal">
                                                        <label for="exampleFormControlTextarea1"> Descrição </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>

                                                    <h2>Cor da categoria:</h2>

                                                    <div class="seletor-de-cor">
                                                        <input type="color" id="head" name="head" value="#ff7700">
                                                        <label for="head"></label>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">FECHAR</button>
                                                        <button type="button" class="btn botao-salvar">SALVAR MUDANÇAS
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><button class="btn btn-outline-dark" data-toggle="modal"
                                            data-target=".visualiza-categoria"><i class="fas fa-eye"></i>
                                        </button>

                                        <div class="modal fade bd-example-modal-xl visualiza-categoria" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            id="visualiza-categoria">
                                            <div class="modal-dialog modal-xl modal-grande">
                                                <div class="modal-content conteudo-modal">
                                                    <div class="formulario-modal">
                                                        <h1>Visualiza Categoria</h1>

                                                        <hr>
                                                       

                                                        <label class="elemento-visualiza"
                                                            for="exampleFormControlTextarea1">Nome da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text"
                                                            placeholder="Naruto" readonly>

                                                        <label class="elemento-visualiza"
                                                            for="exampleFormControlTextarea1">Descrição da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text"
                                                            placeholder="Produtos dos Shows Naruto e Boruto" readonly>

                                                        <h2 class="h2-visualiza elemento-visualiza">Cor da categoria
                                                        </h2>

                                                        <div class="elemento-visualiza">
                                                            <input type="color" id="head" name="head" value="#ff7700"
                                                                disabled>
                                                            <label for="head"></label>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">FECHAR</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><button class="btn botao-deleta-categoria btn-outline-dark" data-toggle="modal"
                                            data-target=".deleta-categoria"><i class="fas fa-trash-alt"></i></button>

                                        <div class="modal deleta-categoria" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">DELETAR CATEGORIA</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Tem certeza de que quer deletar essa categoria?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">FECHAR</button>
                                                        <button type="button" class="btn btn-danger">DELETAR
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>ONE PIECE</td>

                            <td>
                                <ul>
                                    <li><button class="btn btn-outline-dark" data-toggle="modal"
                                            data-target=".edita-categoria"><i class="fas fa-edit"></i></button>
                                        <div class="modal fade bd-example-modal-xl edita-categoria" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            id="edita-categoria">
                                            <div class="modal-dialog modal-xl modal-grande">
                                                <div class="modal-content conteudo-modal">
                                                    <div class="form-group formulario-modal">
                                                        <h1>Editar Categoria</h1>

                                                        <hr>
                                                        

                                                        <label for="exampleFormControlTextarea1"> Nome da
                                                            categoria </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="1"></textarea>
                                                    </div>

                                                    <div class="form-group formulario-modal">
                                                        <label for="exampleFormControlTextarea1"> Descrição </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>

                                                    <h2>Cor da categoria:</h2>

                                                    <div class="seletor-de-cor">
                                                        <input type="color" id="head" name="head" value="#ff7700">
                                                        <label for="head"></label>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">FECHAR</button>
                                                        <button type="button" class="btn botao-salvar">SALVAR MUDANÇAS
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><button class="btn btn-outline-dark" data-toggle="modal"
                                            data-target=".visualiza-categoria"><i class="fas fa-eye"></i>
                                        </button>

                                        <div class="modal fade bd-example-modal-xl visualiza-categoria" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            id="visualiza-categoria">
                                            <div class="modal-dialog modal-xl modal-grande">
                                                <div class="modal-content conteudo-modal">
                                                    <div class="formulario-modal">
                                                        <h1>Visualiza Categoria</h1>

                                                        <hr>
                                                        

                                                        <label class="elemento-visualiza"
                                                            for="exampleFormControlTextarea1">Nome da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text"
                                                            placeholder="Naruto" readonly>

                                                        <label class="elemento-visualiza"
                                                            for="exampleFormControlTextarea1">Descrição da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text"
                                                            placeholder="Produtos dos Shows Naruto e Boruto" readonly>

                                                        <h2 class="h2-visualiza elemento-visualiza">Cor da categoria
                                                        </h2>

                                                        <div class="elemento-visualiza">
                                                            <input type="color" id="head" name="head" value="#ff7700"
                                                                disabled>
                                                            <label for="head"></label>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">FECHAR</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><button class="btn botao-deleta-categoria btn-outline-dark" data-toggle="modal"
                                            data-target=".deleta-categoria"><i class="fas fa-trash-alt"></i></button>

                                        <div class="modal deleta-categoria" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">DELETAR CATEGORIA</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Tem certeza de que quer deletar essa categoria?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">FECHAR</button>
                                                        <button type="button" class="btn btn-danger">DELETAR
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>NARUTO</td>
                            <td>
                                <ul>
                                    <li><button class="btn btn-outline-dark" data-toggle="modal"
                                            data-target=".edita-categoria"><i class="fas fa-edit"></i></button>
                                        <div class="modal fade bd-example-modal-xl edita-categoria" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            id="edita-categoria">
                                            <div class="modal-dialog modal-xl modal-grande">
                                                <div class="modal-content conteudo-modal">
                                                    <div class="form-group formulario-modal">
                                                        <h1>Editar Categoria</h1>

                                                        <hr>
                                                        

                                                        <label for="exampleFormControlTextarea1"> Nome da
                                                            categoria </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="1"></textarea>
                                                    </div>

                                                    <div class="form-group formulario-modal">
                                                        <label for="exampleFormControlTextarea1"> Descrição </label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="3"></textarea>
                                                    </div>

                                                    <h2>Cor da categoria:</h2>

                                                    <div class="seletor-de-cor">
                                                        <input type="color" id="head" name="head" value="#ff7700">
                                                        <label for="head"></label>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">FECHAR</button>
                                                        <button type="button" class="btn botao-salvar">SALVAR MUDANÇAS
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><button class="btn btn-outline-dark" data-toggle="modal"
                                            data-target=".visualiza-categoria"><i class="fas fa-eye"></i>
                                        </button>

                                        <div class="modal fade bd-example-modal-xl visualiza-categoria" tabindex="-1"
                                            role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true"
                                            id="visualiza-categoria">
                                            <div class="modal-dialog modal-xl modal-grande">
                                                <div class="modal-content conteudo-modal">
                                                    <div class="formulario-modal">
                                                        <h1>Visualiza Categoria</h1>

                                                        <hr>
                                                        

                                                        <label class="elemento-visualiza"
                                                            for="exampleFormControlTextarea1">Nome da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text"
                                                            placeholder="Naruto" readonly>

                                                        <label class="elemento-visualiza"
                                                            for="exampleFormControlTextarea1">Descrição da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text"
                                                            placeholder="Produtos dos Shows Naruto e Boruto" readonly>

                                                        <h2 class="h2-visualiza elemento-visualiza">Cor da categoria
                                                        </h2>

                                                        <div class="elemento-visualiza">
                                                            <input type="color" id="head" name="head" value="#ff7700"
                                                                disabled>
                                                            <label for="head"></label>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">FECHAR</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><button class="btn botao-deleta-categoria btn-outline-dark" data-toggle="modal"
                                            data-target=".deleta-categoria"><i class="fas fa-trash-alt"></i></button>

                                        <div class="modal deleta-categoria" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">DELETAR CATEGORIA</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Fechar">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Tem certeza de que quer deletar essa categoria?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">FECHAR</button>
                                                        <button type="button" class="btn btn-danger">DELETAR
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

    </div>


    <script src="https://kit.fontawesome.com/5d99e3d3ae.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


</body>

</html>
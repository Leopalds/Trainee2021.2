<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administração dos Produtos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../../public/css/view_ADM_produtos.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
  <link href="../../../public/css/navbar-adm.css" rel="stylesheet">
  <script src="../../../public/js/navbarAdm.js"></script>
</head>

<body>
 
<?php require 'navbar.php' ?>

  <!-- Modal Adiconar Produto -->
  <div class="modal fade modal-adicionar-produto modais" id="modal-adicionar-produto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>

                  <div class="form-group">
                    <label for="input-nome">Nome Produto</label>
                    <input type="text" class="form-control" id="input-nome" placeholder="Nome do Produto">
                  </div>

                  <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="input-nome">Preço</label>
                    <input type="number" class="form-control" id="input-nome" placeholder="R$">
                  </div>

                  <div class="form-group">
                    <label for="input-imagem">Imagem Principal do Produto</label>
                    <input type="file" class="form-control-file" id="imgproduto">
                  </div>

                  <p>CATEGORIA:</p>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Camisa" id="cat-camisa" value="Camisa">
                    <label class="form-check-label" for="cat-camisa">
                      Camisa
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Conjunto" id="cat-conjunto" value="Conjunto">
                    <label class="form-check-label" for="cat-conjunto">
                      Conjunto
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Cosplay" id="cat-cosplay" value="Cosplay">
                    <label class="form-check-label" for="cat-cosplay">
                      Cosplay
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Moletom" id="cat-moletom" value="Moletom">
                    <label class="form-check-label" for="cat-moletom">
                      Moletom
                    </label>
                  </div>

          </form>

        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary modbut">Confirmar</button>
            </div>
       </div>

    </div>
  </div>
  <!-- Fim Modal Adicionar Produto -->

  <!-- Modal Vizualizar Produto -->
  <div class="modal fade modal-visualisar modais" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Moletom Selamento de Oito Trigramas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


            <div class="textview">

                <p>DESCRIÇÃO:</p>
                <p>Material: Algodão - Com capuz</p>

                <p>Preço: R$ 78,99</p>

                <p>CATEGORIA:</p>
                <p>Moletom</p>

            </div>

            <img class="imgview" src="../../public/img/moletomb.jpg">

            <p> </p>
            <p> </p>
            <p> </p>

      </div>
    </div>
</div>

  <!-- Fim modal Vizualizar Produto -->

  <!-- Modal Editar Produto -->
  <div class="modal fade modal-editar-produto modais" id="modal-editar-produto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modificar Detalhes do Produto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>

                  <div class="form-group">
                    <label for="input-nome">Nome</label>
                    <input type="text" class="form-control" id="input-nome" placeholder="Moletom Selamento de Oito Trigramas">
                  </div>

                  <div class="form-group">
                    <label for="input-descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" placeholder="Material: Algodão - Com capuz" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="input-nome">Preço</label>
                    <input type="number" class="form-control" id="input-nome" placeholder="R$78,99">
                  </div>

                  <div class="form-group">
                    <label for="input-imagem">Nova Imagem Principal do Produto</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                  </div>

                  <p>Mudança de Categoria:</p>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="opcao1">
                    <label class="form-check-label" for="cat-camisa">
                      Camisa
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="opcao2" checked>
                    <label class="form-check-label" for="cat-conjunto">
                      Conjunto
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="cat-cosplay">
                      Cosplay
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="cat-moletom">
                      Moletom
                    </label>
                  </div>

                  <p> </p>

          </form>

        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary modbut">Salvar mudanças</button>
            </div>
       </div>
       
    </div>
  </div>
  <!-- Fim Modal Editar Produto -->

  <!-- Início Modal Excluir-->
  <div class="modal fade modal-excluir-produto modais" id="modal-excluir-produto" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">EXCLUIR PRODUTO</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>TEM CERTEZA QUE DESEJA EXCLUIR ESTE PRODUTO DO BANCO DE DADOS?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary modbut">Confirmar</button>
        </div>
      </div>
    </div>
  </div>     
  <!-- Fim Modal Excluir -->

  <div class="container">

    <div class="input-group barrabusca">
      <input type="search" class="form-control rounded" placeholder="Nome Produto" aria-label="Search"
        aria-describedby="search-addon" />
      <button type="button" class="btn btn-outline-white">Buscar</button>
    </div>

    <!-- Botão Modal Adicionar Produto -->
    <button type="button" class="btn btn-secondary btn-lg btn-block botaoadd" data-toggle="modal" data-target=".modal-adicionar-produto">Adiconar Produto</button>
    
    <!-- Tabela de Itens -->

      <div class="table-responsive">

          <table class="table table-hover table-dark table-responsive{-sm|-md|-lg|-xl} tabelinha">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
                <th class="acoes" scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

              <tr>
              <?php foreach($produtos as $itemProdutos) : ?>
                <th class="id" scope="row"><?= $itemProdutos->id ?></th>
                <th class="nome"><?= $itemProdutos->nome ?></th>
                <td class="descricao"><?= $itemProdutos->descicao ?></td>
                <td class="preco">R$ <?= number_format($itemProdutos->preco , 2, ',') ?></td>
                <td class="categoria"><?= $itemProdutos->categoria ?></td>
                <td class="colunaacoes">
                  <div class="btn-group listaacoes">

                    <!-- Botão Visualizar -->
                  <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".modal-visualisar">
                    <i class="far fa-eye iconebotao"></i>
                  </button>
                    
                    <!-- Botão Editar -->
                  <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".modal-editar-produto">
                    <i class="far fa-edit iconebotao"></i>
                  </button>

                  <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target=".modal-excluir-produto">
                    <i class="far fa-trash-alt iconebotao"></i>
                  </button>

                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">2021e347</th>
                <th>Camisa Hunter X Hunter - Killua</th>
                <td>Material: Algodão - Apenas cor preta</td>
                <td>R$ 42,50</td>
                <td>Camisa</td>
                <td class="colunaacoes">
                  <div class="btn-group listaacoes">

                      <button class="botaoacao"><i class="far fa-eye iconebotao"></i></button>
                      <button class="botaoacao"><i class="far fa-edit iconebotao"></i></button>
                      <button class="botaoacao"><i class="far fa-trash-alt iconebotao"></i></button>

                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row">2021g678</th>
                <th>Conjunto Preto Moletom e Calça Aldeia da Folha</th>
                <td>Oversized - Material: Algodão</td>
                <td>R$ 169,90</td>
                <td>Conjunto</td>
                <td class="colunaacoes">
                  <div class="btn-group listaacoes">

                      <button class="botaoacao"><i class="far fa-eye iconebotao"></i></button>
                      <button class="botaoacao"><i class="far fa-edit iconebotao"></i></button>
                      <button class="botaoacao"><i class="far fa-trash-alt iconebotao"></i></button>

                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row">2021k809</th>
                <th>Cosplay Violet Evergarden - Violet</th>
                <td>Peruca e Enchimento da saia inclusos</td>
                <td>R$ 199,80</td>
                <td>Cosplay</td>
                <td class="colunaacoes">
                  <div class="btn-group listaacoes">

                      <button class="botaoacao"><i class="far fa-eye iconebotao"></i></button>
                      <button class="botaoacao"><i class="far fa-edit iconebotao"></i></button>
                      <button class="botaoacao"><i class="far fa-trash-alt iconebotao"></i></button>

                  </div>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

      </div>    


  </div>



  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/5d99e3d3ae.js" crossorigin="anonymous"></script>

  <!-- Scripts Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>
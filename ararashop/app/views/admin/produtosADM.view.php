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
  <!-- <link href="../../../public/css/navbar-adm.css" rel="stylesheet">  -->
  <script src="../../../public/js/navbarAdm.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

</head>



<body>

  
   <!-- <?php require 'navbar.php' ?>  -->
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
          <form action="/admin/produtos/create" method="POST">

                  <div class="form-group">
                    <label for="input-nome">Nome Produto</label>
                    <input type="text" class="form-control" id="input-nome" name="nome" placeholder="Nome do Produto">
                  </div>

                  <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="input-nome">Preço</label>
                    <input step="0.01" type="number" class="form-control" id="input-nome" name="preco" placeholder="R$">
                  </div>

                  <div class="form-group">
                    <label for="input-imagem">Imagem Principal do Produto</label>
                    <input type="file" class="form-control-file" id="imgproduto" name="imagem" >
                  </div>

                  <p>CATEGORIA:</p>
                  <?php foreach($categorias as $categoria) : ?> 
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="categoria" id="cat-camisa" value="Camisa">
                    <label class="form-check-label" for="cat-camisa">
                      <?= $categoria->nome ?>
                    </label>
                  </div>
                  <?php endforeach; ?>

                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary modbut">Confirmar</button>
                </div>
              </div>
              
          </form>

    </div>
  </div>
  <!-- Fim Modal Adicionar Produto -->

  



  

  <div class="container">
    
<form action="" method="GET">
    <div class="input-group barrabusca">
      <input type="search" class="form-control rounded" value="<?php if(isset($_GET['search'])){echo $_GET['search']; }?>" placeholder="Nome Produto" aria-label="Search"
        aria-describedby="search-addon" />
      <button type="button" class="btn btn-outline-white">Buscar</button>
    </div>
</form>
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
                
                <?php foreach ($tableProdutos as $itemProdutos) : ?>

                  <?php require 'modal/produto/modal-view.php' ?>
                  <?php require 'modal/produto/modal-edit.php' ?>
                  <?php require 'modal/produto/modal-excluir.php' ?>
                
                <th class="id" scope="row"><?= $itemProdutos->id ?></th>
                <th class="nome"><?= $itemProdutos->nome ?></th>
                <td class="descricao"><?= $itemProdutos->descricao ?></td>
                <td class="preco"> R$ <?= number_format($itemProdutos->preco ,2,',') ?></td>
                <td class="categoria"><?= $itemProdutos->categoria ?></td>
                <td class="colunaacoes">
                  <div class="btn-group listaacoes">

                          <!-- Botão Visualizar -->
                             <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target="#modal-visualisar-<?= $itemProdutos->id ?>">
                                 <i class="far fa-eye iconebotao"></i>
                             </button>
                          <!-- Final Botão Visualizar -->

                          <!-- Botão Editar -->
                             <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target="#modal-editar-produto-<?= $itemProdutos->id ?>">
                                  <i class="far fa-edit iconebotao"></i>
                             </button>
                          <!-- Final Botão Editar -->
                         
                          <!-- Botão Excluir -->
                            <button type="button" class="btn btn-primary botaoacao" data-toggle="modal" data-target="#modal-excluir-produto-<?= $itemProdutos->id ?>">
                                 <i class="far fa-trash-alt iconebotao"></i>
                           </button>
                           <!-- Final Botão Excluir -->

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
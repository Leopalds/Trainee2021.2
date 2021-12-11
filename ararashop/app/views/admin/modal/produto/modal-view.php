<!-- Modal Vizualizar Produto -->
<div class="modal fade modais" tabindex="-1" id="modal-visualisar-<?= $itemProdutos->id ?>" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><?= $itemProdutos->nome ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


            <div class="textview">

                <p>DESCRIÇÃO:</p>
                <p><?= $itemProdutos->descricao ?></p>

                <p>Preço: R$ <?= number_format($itemProdutos->preco ,2,',') ?></p>

                <p>CATEGORIA:</p>
                <p><?= $itemProdutos->categoria ?></p>

            </div>

            <img class="imgview" src="../../public/img/produtos/<?= $itemProdutos->imagem ?>">

      </div>
    </div>
</div>

  <!-- Fim modal Vizualizar Produto -->
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
                <p><?php $itemProdutos->descricao ?></p>

                <p>Preço: R$ <?php number_format($itemProdutos->preco , 2, ',') ?> </p>

                <p>CATEGORIA:</p>
                <p><?php $itemProdutos->categoria ?></p>

            </div>

            <img class="imgview"  src="../../../../../public/img/<?php $itemProdutos->imagem ?>">

            <p> </p>
            <p> </p>
            <p> </p>

      </div>
    </div>
</div>

  <!-- Fim modal Vizualizar Produto -->

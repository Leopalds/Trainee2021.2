        <!-- Modal Editar Produto -->

        <div class="modal fade modais" id="modal-editar-produto-<?= $itemProdutos->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Detalhes do Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="/admin/produtos/update" method="POST">
                <div class="modal-body">


                  <div class="form-group">
                    <label for="input-nome">Nome</label>
                    <input required type="text" class="form-control" name="nome" id="input-nome" value="<?= $itemProdutos->nome ?>">
                  </div>

                  <div class="form-group">
                    <label for="input-descricao">Descrição</label>
                    <input type="hidden" name="descricao-antiga" value="<?= $itemProdutos->descricao ?>">
                    <textarea class="form-control" name="descricao" id="input-nome" placeholder="<?= $itemProdutos->descricao ?>" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="input-nome">Preço</label>
                    <input required step="0.01" type="number" class="form-control" name="preco" id="input-nome" value="<?= $itemProdutos->preco ?>">
                  </div>

                  <div class="form-group">
                    <label for="input-imagem">Nova Imagem Principal do Produto</label>
                    <input type="hidden" name="imagem-antiga" value="<?= $itemProdutos->imagem ?>">
                    <input type="file" class="form-control-file" name="imagem" id="exampleFormControlFile1">
                  </div>

                  <p>Mudança de Categoria:</p>

                  <?php foreach ($categorias as $categoria) : ?>
                    <div class="form-check form-check-inline">
                      
                      <input class="form-check-input" type="radio" name="categoria" id="cat-camisa" value="Camisa" 
                        <?php if($categoria->nome == $itemProdutos->categoria) echo ("checked");?>>
              
                      <label class="form-check-label" for="cat-camisa">
                        <?= $categoria->nome ?>
                      </label>
                    </div>
                  <?php endforeach; ?>

                </div> <!-- Final div class = "modal-body" -->


                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                  <input type="hidden" value="<?= $itemProdutos->id ?>" name="id">
                  <button type="submit" class="btn btn-primary modbut">Salvar mudanças</button>
                </div>

              </form>

            </div> <!-- Final div class = "modal-content" -->
          </div> <!-- Final div class = "modal-dialog modal-lg" -->
        </div> <!-- Final div do modal -->

        <!-- Fim Modal Editar Produto -->
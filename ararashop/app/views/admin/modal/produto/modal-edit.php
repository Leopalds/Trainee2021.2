        <!-- Modal Editar Produto -->

        <div class="modal fade modais" id="modal-editar-produto-<?= $produtoad->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar Detalhes do Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form action="/produtosadm/updateprodutos" method="POST">
                <div class="modal-body">


                  <div class="form-group">
                    <label for="input-nome">Nome</label>
                    <input type="hidden" value="<?= $produtoad->nome ?>" name="nome">
                    <input required type="text" class="form-control" name="nome" id="input-nome" placeholder="<?= $produtoad->nome ?>">
                  </div>

                  <div class="form-group">
                    <label for="input-descricao">Descrição</label>
                    <input type="hidden" value="<?= $produtoad->descricao ?>" name="descricao">
                    <textarea required class="form-control" name="descricao" id="input-nome" placeholder="<?= $produtoad->descricao ?>" rows="3"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="input-nome">Preço</label>
                    <input type="hidden" value="<?= $produtoad->preco ?>" name="preco">
                    <input required step="0.01" type="number" class="form-control" name="preco" id="input-nome" placeholder="R$ <?= number_format($produtoad->preco, 2, ',') ?>">
                  </div>

                  <div class="form-group">
                    <label for="input-imagem">Nova Imagem Principal do Produto</label>
                    <input type="hidden" value="<?= $produtoad->imagem ?>" name="imagem">
                    <input required type="file" class="form-control-file" name="imagem" id="exampleFormControlFile1">
                  </div>

                  <p>Mudança de Categoria:</p>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="categoria" id="exampleRadios1" value="opcao1">
                    <input type="hidden" value="<?= $produtoad->categoria ?>" name="categoria">
                    <label class="form-check-label" for="cat-camisa">
                      Camisa
                    </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="categoria" id="exampleRadios2" value="opcao2">
                    <input type="hidden" value="<?= $produtoad->categoria ?>" name="categoria">
                    <label class="form-check-label" for="cat-conjunto">
                      Conjunto
                    </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="categoria" id="exampleRadios3" value="option3">
                    <input type="hidden" value="<?= $produtoad->categoria ?>" name="categoria">
                    <label class="form-check-label" for="cat-cosplay">
                      Cosplay
                    </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="categoria" id="exampleRadios3" value="option3">
                    <input type="hidden" value="<?= $produtoad->categoria ?>" name="categoria">
                    <label class="form-check-label" for="cat-moletom">
                      Moletom
                    </label>
                  </div>

                  <?php foreach ($categoriasexemplo as $cat) : ?>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="categoria" id="cat-<?= $cat->categ ?>" value="<?= $cat->categ ?>">
                      <label class="form-check-label" for="cat-<?= $cat->categ ?>">
                        <?= $cat->categ ?>
                      </label>
                    </div>
                  <?php endforeach; ?>

                </div> <!-- Final div class = "modal-body" -->


                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary modbut" data-dismiss="modal">Fechar</button>
                  <input type="hidden" value="<?= $produtoad->id ?>" name="id">
                  <button type="submit" class="btn btn-primary modbut">Salvar mudanças</button>
                </div>

              </form>

            </div> <!-- Final div class = "modal-content" -->
          </div> <!-- Final div class = "modal-dialog modal-lg" -->
        </div> <!-- Final div do modal -->

        <!-- Fim Modal Editar Produto -->
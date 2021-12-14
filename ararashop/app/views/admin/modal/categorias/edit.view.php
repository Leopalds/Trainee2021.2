<div class="modal fade bd-example-modal-xl edita-categoria" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="edita-categoria-<?= $categoria->id ?>">
    <div class="modal-dialog modal-xl modal-grande">
        <div class="modal-content conteudo-modal">
            <form action="/categorias/update" method="POST">
                <div class="form-group formulario-modal">
                    <h1>Editar Categoria</h1>

                    <hr>

                    <label for="exampleFormControlTextarea1"> Nome da
                        categoria: </label>
                    <input type="text" name="nome" value="<?= $categoria->nome ?>">
                    <input type="hidden" name="id" value="<?= $categoria->id ?>">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                    <button type="submit" class="btn botao-salvar">SALVAR MUDANÇAS
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
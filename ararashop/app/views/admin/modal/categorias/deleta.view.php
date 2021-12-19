<div class="modal deleta-categoria" tabindex="-1" role="dialog" id="deleta-categoria-<?= $categoria->id ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/admin/categorias/delete" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">DELETAR CATEGORIA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <input class="form-control elemento-visualiza" type="text" placeholder="<?= $categoria->nome?>" readonly>
                    <p>Tem certeza de que quer deletar essa categoria?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                    <input type="hidden" value="<?= $categoria->id ?>" name="id">
                    <button type="submit" class="btn btn-danger">DELETAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
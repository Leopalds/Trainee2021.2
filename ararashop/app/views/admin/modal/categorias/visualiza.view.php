<div class="modal fade bd-example-modal-xl visualiza-categoria" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="visualiza-categoria-<?= $categoria->id ?>">
    <div class="modal-dialog modal-xl modal-grande">
        <div class="modal-content conteudo-modal">
            <div class="formulario-modal">
                <h1>Visualiza Categoria</h1>

                <hr>


                <label class="elemento-visualiza" for="exampleFormControlTextarea1">Nome da
                    categoria</label>
                <input class="form-control elemento-visualiza" type="text" placeholder="<?= $categoria->nome?>" readonly>

                <!-- <label class="elemento-visualiza" for="exampleFormControlTextarea1">Descrição da
                                                            categoria</label>
                                                        <input class="form-control elemento-visualiza" type="text" placeholder="Produtos dos Shows Naruto e Boruto" readonly>

                                                        <h2 class="h2-visualiza elemento-visualiza">Cor da categoria
                                                        </h2>

                                                        <div class="elemento-visualiza">
                                                            <input type="color" id="head" name="head" value="#ff7700" disabled>
                                                            <label for="head"></label>
                                                        </div> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
    </div>
</div>
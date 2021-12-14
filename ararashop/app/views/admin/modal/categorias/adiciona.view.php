

<div class="modal fade bd-example-modal-xl adiciona-categoria" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" id="modal-adiciona-categoria">
    <div class="modal-dialog modal-xl modal-grande">
        <div class="modal-content conteudo-modal">
            <form action="/categorias/create" method="POST">
                <div class="form-group formulario-modal">

                    <h1>Adicionar categoria</h1>

                    <hr>


                    <label for="exampleFormControlTextarea1">Nome da categoria</label>

                    <input type="text" name="nome">
                </div>

                <!-- <div class="form-group formulario-modal">
                                <label for="exampleFormControlTextarea1">Descrição</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <h2>Cor da categoria:</h2>

                            <div class="seletor-de-cor">
                                <input type="color" id="head" name="head" value="#ff7700">
                                <label for="head">Head</label>
                            </div> -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                    <button type="submit" class="btn  botao-salvar">ADICIONAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
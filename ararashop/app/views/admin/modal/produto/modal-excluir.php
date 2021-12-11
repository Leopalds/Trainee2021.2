     <!-- Início Modal Excluir-->
     <div class="modal fade modais" id="modal-excluir-produto-<?= $itemProdutos->id ?>" tabindex="-1" role="dialog">
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
             <form action="/admin/delete" method="POST">
               <input type="hidden" value="<?= $itemProdutos->id ?>" name="id">
               <button type="submit" class="btn btn-primary modbut">Confirmar</button>
             </form>
           </div>

         </div>
       </div>
     </div>
     </div>
     <!-- Fim Modal Excluir -->

     
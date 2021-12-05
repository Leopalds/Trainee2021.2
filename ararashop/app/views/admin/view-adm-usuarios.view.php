<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../..//public/css/view-adm-usuarios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <title>ADM Usuários</title>

</head>
<body>
    <div class="container-fluid">
      <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#Modaladiciona" id="add">Adicionar usuário</button>
      <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col" id="td">Nº</th>
                <th scope="col" id="td">Nome</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
        <?php foreach ($tb_adm_usuarios as $function) : ?>
            <tr>
              <th scope="row" id="td"><?=$function->id?></th>
              <td id="td"><button class="btn btn-outline-dark" id="nomebutton"><?=$function->nome?></button></td>
              <td id="tdbutton"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#Modalusuario" id="usubutton" type="submit"><img src="../../public/img/adm_usuarios/usuario.png" id="usuario"></button><button class="btn btn-outline-dark" data-toggle="modal" data-target="#Modaledita" id="editbutton"><img src="../../public/img/adm_usuarios/edit.png" id="editar"></button><button type="button" id="excluibutton" class="btn btn-outline-danger" data-toggle="modal" data-target="#Modalexclui"><img src="../../public/img/adm_usuarios/lixeira2.png" id="excluir"></button></td>
            </tr>
        <?php endforeach; ?> <!--
            <tr>
                <th scope="row" id="td">2</th>
                <td id="td"><button class="btn btn-outline-dark" id="nomebutton">Jacob</button></td>
                <td id="tdbutton"><button class="btn btn-outline-dark" id="usubutton"><img src="../../public/img/adm_usuarios/usuario.png" id="usuario"></button><button class="btn btn-outline-dark" id="editbutton"><img src="../../public/img/adm_usuarios/edit.png" id="editar"></button><button id="excluibutton" class="btn btn-outline-danger"><img src="../../public/img/adm_usuarios/lixeira2.png" id="excluir"></button></td>
            </tr>
            <tr>
                <th scope="row" id="td">3</th>
                <td id="td"><button class="btn btn-outline-dark" id="nomebutton">Larry</button></td>
                <td id="tdbutton"><button class="btn btn-outline-dark" id="usubutton"><img src="../../public/img/adm_usuarios/usuario.png" id="usuario"></button><button class="btn btn-outline-dark" id="editbutton"><img src="../../public/img/adm_usuarios/edit.png" id="editar"></button><button id="excluibutton" class="btn btn-outline-danger"><img src="../../public/img/adm_usuarios/lixeira2.png" id="excluir"></button></td>
            </tr>
            </tbody>
        </table> !-->
      </div>

    <div class="modal fade" id="Modalusuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Visualização de usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/tb_adm_usuarios/show" method="GET">
                    <input type="hidden" value="<?= $function->id ?>" name="id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Foto de Perfil:</label>
                        <input type="image" class="form-control" id="nameFormInput" readonly placeholder="">     
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome de usuário:</label>
                        <input type="text" class="form-control" id="nameFormInput" readonly placeholder="">     
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email:</label>
                        <input type="text" class="form-control" id="nameFormInput" readonly placeholder="">     
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" readonly placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Informações extras sobre o usuário:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly placeholder=""></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="Modaledita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edição de usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="formulario-adiciona">
                    <h2>Altere os dados desejados</h2>
                      <form action="/tb_adm_usuarios/update" method="POST">
                        <input type="hidden" value="<?= $function->id ?>" name="id">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome de usuário:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='nome' placeholder="Izuku Midoriya">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email:</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name='email' placeholder="Orumaitofan@gmail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name='senha' placeholder="Oru_Maito">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informações extras sobre o usuário:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='informacoes' placeholder="Vou ser o herói número 1!"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Foto de perfil:</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name='foto_perfil'>
                        </div> 
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning" id="conf-modal">Salvar Alterações</button>
                        </div>  
                      </form>                  
                </div>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="Modalexclui" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Deseja excluir este usuário?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Vou sentir saudade da tropa de exploração :(</p>
            </div>
            <div class="modal-footer">
                <form id="form_deleta" action="/tb_adm_usuarios/delete" method="POST">
                  <input type="hidden" value="<?= $function->id ?>" name="id">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-warning" id="conf-modal">Excluir</button>
                </form>
            </div>
          </div>
        </div>
    </div>

    <div class="modal fade" id="Modaladiciona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" action="tb_adm_usuarios/create" method="POST">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Dados do novo usuário</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="formulario-adiciona">
                    <h2>Preencha o formulário para adicionar novos Usuários</h2>
                    <form action="/tb_adm_usuarios/create" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome de usuário:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='nome' placeholder="Izuku Midoriya">
                            <small id="emailHelp" class="form-text text-muted">Indique o nome para o cadastro</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="text" class="form-control" id="nameFormInput" name='email' placeholder="orumaito@email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name='senha' placeholder="Oru_Maito">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Informações extras sobre o usuário:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='informacoes' placeholder="Vou ser o herói número 1!"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Foto de perfil:</label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name='foto_perfil'>
                        </div> 
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-warning" id="conf-modal">Adicionar</button>
                        </div>
                    </form>
                    
                </div>
            </div>
    
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/view-adm-usuarios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../public/css/navbar-adm.css">
    <script src="../../../public/js/navbarAdm.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a3ef7191d.js" crossorigin="anonymous"></script>

    <title>ADM Usuários</title>

</head>
<body>

  
  <?php require 'navbar.php'; ?>
  <div class="container-fluid-ds">
    
    <form action="/admin/usuarios" method="GET">
        <div class="input-group barrabusca">
          <input type="search" name="search" value="<?= $_GET['search'] ?? null ?>" class="form-control rounded" placeholder="Nome Usuário" aria-label="Search"
            aria-describedby="search-addon" />
          <button type="submit" class="btn btn-outline-white">Buscar</button>
        </div>
    </form>
    
    <table class="table table-dark table-responsive{-sm|-md|-lg|-xl}">
      <?php require 'modal/usuarios/modal-create.php' ?>
      <button type="button" id="add" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#modal-create">Adicionar usuário</button>
      <thead>
         <tr>
            <th scope="col" id="td">Nº</th>
            <th scope="col" id="td">Nome</th>
            <th scope="col">Ações</th>
        </tr>
      </thead>
        <tbody>
      <?php foreach ($usuarios as $function) : ?>
      <?php require 'modal/usuarios/modal-view.php' ?>
      <?php require 'modal/usuarios/modal-delete.php' ?>
      <?php require 'modal/usuarios/modal-edit.php' ?>

          <tr>
            <th scope="row" id="td"><?=$function->id?></th>
            <td id="td"><button type="button" class="btn btn-outline-dark" id="nomebutton"><?=$function->nome?></button></td>
            <td id="tdbutton"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modal-view-<?=$function->id?>" id="usubutton" type="submit"> <i class="far fa-eye iconebotao"></i></button><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modal-edit-<?=$function->id?>" id="editbutton"><i class="far fa-edit iconebotao"></i></button><button type="button" id="excluibutton" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-delete-<?=$function->id?>"><i class="far fa-trash-alt iconebotao"></i></button></td>
          </tr>
      <?php endforeach; ?>
    </table>
  </div>

  <div class="js">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5d99e3d3ae.js" crossorigin="anonymous"></script>
  </div>
</body>
</html>


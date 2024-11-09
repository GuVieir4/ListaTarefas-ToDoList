<?php

session_start();
require_once("conexao.php");

$sql = "SELECT * FROM lista_tarefas";
$usuarios = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body style="width: calc(100% - 12px);">

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" style="width: calc(100% + 12px);">
    <div class="container">
      <i class="bi bi-trello"></i>

      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <span class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 5px;">Gerenciador de Tarefas</span>
        <div class=" align-items-center">
          <a href="./create-tarefa.php" data-mdb-ripple-init type="button" class="btn btn-outline-primary me-3">
            Cadastrar Tarefa
          </a>
            <div class="btn btn-dark px-3" id="door">
              <i onclick="return confirm('Sair do sistema?')" class="bi bi-door-open"></i>
            </div>
        </div>
      </div>
    </div>
  </nav>
</header>


<main>
  <div class="text-center">
      <?php include('mensagem.php'); ?>
  </div>
      <h4 class="d-flex justify-content-center mt-3" style="gap: 6px;">Tarefas Criadas<i class="bi bi-card-checklist"></i></h4>
  <div class="row gap-3 justify-content-center">
      <?php foreach ($usuarios as $usuario): ?>
          <div class="card border-primary mt-3" style="width: 22rem; padding: 0;">
              <h5 class="card-header"><?php echo $usuario['nome']; ?></h5>
              <div class="card-body">
                  <h5 class="card-text"><?php echo $usuario['descricao']; ?></h5>
                  <table class="table table-bordered table-striped mt-3">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Data Limite</th>
                              <th>Status</th>
                          </tr>
                          <tbody>
                              <td><?php echo $usuario['id']; ?></td>
                              <td><?php echo date('d/m/Y', strtotime($usuario['data_limite'])); ?></td>
                              <td> <p class="btn btn-outline-dark btn-sm"><?php echo $usuario['status']; ?></p></td>
                          </tbody>
                      </thead>
                  </table>
                  <div class="acoes d-flex float-end" style="gap: 6px;">
                      <a href="edit-tarefa.php?id=<?=$usuario['id']?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i></a>
                      <form action="acoes.php" method="POST" class="d-inline">
                          <button onclick="return confirm('Tem certeza que deseja excluir?')" name="delete_tarefa" type="submit" value="<?=$usuario['id']?>" class="btn btn-danger btn-sm"><i class="bi bi-x-octagon-fill"></i></button>
                      </form>
                  </div>
              </div>
          </div>
      <?php endforeach; ?>
  </div>
</main>

<footer class="bg-body-tertiary text-center"  style="position: absolute; width: 100%; bottom: 0;">
  <div class="container p-4 pb-0">
    <section class="mb-4">

      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="https://linkedin.com/in/gustavo-henrique-vieira-da-silva-6284b7231?"
        role="button"
        ><i class="bi bi-linkedin"></i>
      </a>
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="https://github.com/GuVieir4"
        role="button"
        ><i class="bi bi-github"></i>
      </a>
    </section>
  </div>



  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <span class="text-body">Gustavo Henrique</span>
  </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
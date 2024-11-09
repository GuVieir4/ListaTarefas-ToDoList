<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Criar Tarefa</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" style="width: calc(100% - 12px);">
            <div class="container">
                <i class="bi bi-trello"></i>
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <span class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 5px;">Gerenciador de Tarefas</span>
                <div class=" align-items-center">
                    <a href="./index.php" data-mdb-ripple-init type="button" class="btn btn-outline-danger me-3">
                    Voltar
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
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Criar tarefa <i class="bi bi-plus-square-fill"></i> </h4>
                        </div>
                        <div class="card-body">
                            <form action="acoes.php" method="POST">
                                <div class="mb-4">
                                    <label for="txtNome">Nome</label>
                                    <input type="text" name="txtNome" id="txtNome" class="form-control" >
                                </div>
                                <div class="mb-4">
                                    <label for="txtDescricao">Descrição</label>
                                    <input type="text" name="txtDescricao" id="txtDescricao" class="form-control" >
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="txtDataLimite">Data Limite</label>
                                        <input type="date" name="txtDataLimite" id="txtDataLimite" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="txtStatus">Status</label>
                                        <select type="number" name="txtStatus" id="txtStatus" class="form-select" aria-label="Default select example">
                                            <option disabled selected>Selecione uma opção</option>
                                            <option value="Pendente">Pendente</option>
                                            <option value="Em andamento">Em andamento</option>
                                            <option value="Finalizado">Finalizado</option>
                                        </select>
                                    </div>
                                </div>
                            <button type="submit" name="create_tarefa" class="btn btn-primary float-end mt-3 "> <i class="bi bi-floppy-fill"></i></button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
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
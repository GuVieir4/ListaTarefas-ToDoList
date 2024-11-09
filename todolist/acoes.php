<?php

session_start();
require_once("conexao.php");

if (isset($_POST['create_tarefa'])) {
    $nome = trim($_POST['txtNome']);
    $descricao = trim($_POST['txtDescricao']);
    $dataLimite = trim($_POST['txtDataLimite']);
    $status = trim($_POST['txtStatus']);

    $sql = "INSERT INTO lista_tarefas (nome, descricao, data_limite, status) VALUES('$nome', '$descricao', '$dataLimite', '$status')";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit();
}


if (isset($_POST['delete_tarefa'])) {
    $tarefaId = mysqli_real_escape_string($conn, $_POST['delete_tarefa']);
    $sql = "DELETE FROM lista_tarefas WHERE id = '$tarefaId'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['message'] = "Tarefa excluida!";
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = "Não foi possível completar a acão!";
        $_SESSION['type'] = 'error';
    }

    header('Location: index.php');
    exit;
}

if (isset($_POST['edit_tarefa'])) {
    $tarefaId = mysqli_real_escape_string($conn, $_POST['tarefa_id']);
    $nome = mysqli_real_escape_string($conn, $_POST['txtNome']);
    $descricao = mysqli_real_escape_string($conn, $_POST['txtDescricao']);
    $dataLimite = mysqli_real_escape_string($conn, $_POST['txtDataLimite']);
    $status = mysqli_real_escape_string($conn, $_POST['txtStatus']);

    $sql = "UPDATE lista_tarefas SET nome = '{$nome}', descricao = '{$descricao}', data_limite = '{$dataLimite}', status = '{$status}'";

    $sql .= "WHERE id = '{$tarefaId}'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        $_SESSION['message'] = "Tarefa atualizada!";
        $_SESSION['type'] = 'success';
    } else {
        $_SESSION['message'] = "Não foi possível completar a acão!";
        $_SESSION['type'] = 'error';
    }

    header("Location: index.php");
    exit;
}
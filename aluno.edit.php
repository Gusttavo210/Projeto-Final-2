<?php 
    require_once('config/config.php');
    session_start();

    $service = new AlunoService();

    $id = filter_input(INPUT_POST, 'inputIdentificador', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);

    $aluno = new Aluno();
    $aluno->setId($id);
    $aluno->setNome($nome);

    if($service->atualizar($aluno))
    {
        header('location: ./load.php/load-alunos');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./aluno');
        exit;
    }
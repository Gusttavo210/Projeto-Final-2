<?php 
    require_once('config/config.php');
    session_start();

    $service = new AlunoService();

    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);

    $aluno = new Aluno();
    $aluno->setNome($nome);

    if($service->cadastrar($aluno))
    {
        header('location: ./home');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./aluno');
        exit;
    }
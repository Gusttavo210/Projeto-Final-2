<?php 
    require_once('config/config.php');
    session_start();

    $service = new ProfessorService();

    $nome = filter_input(INPUT_POST, 'inputNome', FILTER_SANITIZE_SPECIAL_CHARS);
    $alunoId = filter_input(INPUT_POST, 'inputAluno', FILTER_SANITIZE_NUMBER_INT);
    $status = filter_input(INPUT_POST, 'inputStatus', FILTER_SANITIZE_NUMBER_INT);
    $descricao = filter_input(INPUT_POST, 'inputDescricao', FILTER_SANITIZE_SPECIAL_CHARS);
 
    $professor = new Professor();
    $professor->setNome($nome);
    $professor->setCategoriaId($alunoId);
    $professor->setStatus($status);
    $professor->setDescricao($descricao);

    if($service->cadastrar($professor))
    {
        header('location: ./home');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./professor');
        exit;
    }
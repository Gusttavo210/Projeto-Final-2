<?php
    require_once('config/config.php');
    
    session_start();
    $alunoService = new AlunoService();
    $professorService = new ProfessorService();

    if(isset($_GET['load-aluno'])) {
        $_SESSION['alunos'] = serialize($alunoService->listar());

        header('location: professor');
        exit;
    }

    if(isset($_GET['load-professor'])) {
        $_SESSION['professores'] = $professorService->listar(3);
        header('location: home');
        exit;
    }
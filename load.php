<?php
    require_once('config/config.php');

    $categoriaService = new AlunoService();
    $produtoService = new ProfessorService();
    $usuarioService = new UsuarioService();

    $pathUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $urlSegments = explode('/', substr($pathUri, 1));

    if($urlSegments[count($urlSegments) - 1] == 'load-alunos') {
        $_SESSION['alunos'] = serialize($categoriaService->listar(10));

        header('location: /disciplina/alunos');
        exit;
    }
    
    if($urlSegments[count($urlSegments) - 1] == 'load-professores') {
        $_SESSION['professores'] = serialize($produtoService->listar(10));

        header('location: /disciplina/professores');
        exit;
    }
    
    if($urlSegments[count($urlSegments) - 1] == 'load-usuarios') {
        $_SESSION['usuarios'] = serialize($usuarioService->listar(10));

        header('location: /disciplina/usuarios');
        exit;
    }

    if($urlSegments[count($urlSegments) - 2] == 'load-aluno') {
        $id = $urlSegments[count($urlSegments) - 1];
        $_SESSION['aluno'] = serialize($categoriaService->LocalizarPorId($id));

        header('location: /disciplina/aluno.details');
        exit;
    }

    if($urlSegments[count($urlSegments) - 2] == 'load-usuario') {
        $id = $urlSegments[count($urlSegments) - 1];
        $_SESSION['usuario'] = serialize($usuarioService->LocalizarPorId($id));

        header('location: /disciplina/usuario.details');
        exit;
    }

    if($urlSegments[count($urlSegments) - 1] == 'load-home') {
        $_SESSION['professores'] = serialize($produtoService->listar(3));
        $_SESSION['alunos'] = serialize($categoriaService->listarComQuantidade(3));
        
        header('location: /disciplina/home');
        exit;
    }
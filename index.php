<?php
    require_once('config/config.php');

    $respository = new DisciplinaRepository();

    $aluno = new Aluno();
    $aluno->setNome("Gusttavo");
    $respository->fnAddAluno($aluno);
    
    $professor = new stdClass();
    $professor->id = 1;
    $professor->nome = 'João';
    $professor->descricao = '3 anos de Professor';
    $professor->status = true;
    $professor->alunoId = 1;


    $disciplina = new stdClass();
    $disciplina->dataCadastro = date('Y-m-d H:i:s');
    $disciplina->nome = 'Matemática'
    $disciplina->professorId = 1;
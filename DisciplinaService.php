<?php

    class DisciplinaService {
        
        private $repository;

        public function __construct() {
            $this->repository = new DisciplinaRepository();
        }

        public function cadastrar(Disciplina $disciplina): bool {
            return $this->repository->fnAddDisciplina($disciplina);
        }
    } 
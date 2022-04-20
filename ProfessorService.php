<?php

    class ProfessorService {
        
        private $repository;

        public function __construct() {
            $this->repository = new DisciplinaRepository();
        }

        public function cadastrar(Professsor $professor) {
            return $this->repository->fnAddProfessor($professor);
        }
    } 
    public function listar($limit = 9999) {
        return $this->repository->fnListProfessor($limit);
    }
    
    public function localizar($id) {
        return $this->repository->fnLocalizarProfessor($id);
    }
} 
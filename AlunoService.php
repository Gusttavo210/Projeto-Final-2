<?php

    class AlunoService {
        
        private $repository;

        public function __construct() {
            $this->repository = new DisciplinaRepository();
        }

        public function cadastrar(Categoria $categoria): bool {
            return $this->repository->fnAddAluno($aluno);
        }
        
        public function atualizar(Categoria $categoria): bool {
            return $this->repository->fnUpdateAluno($aluno);
        }
        
        public function listar($limit = 9999) {
            return $this->repository->fnListAluno($limit);
        }
        
        public function listarComQuantidade($limit) {
            return $this->repository->fnListAlunosQuantidade($limit);
        }
        
        public function LocalizarPorId($id) {
            return $this->repository->fnLocalizarAluno($id);
        }

        public function LocalizarPorIds($ids) {
            return $this->repository->fnListAlunoIn($ids);
        }
    } 
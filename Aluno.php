<?php
    class Aluno {

        private int $id;
        private string $nome;
        private string $criadoem;

        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): void {
            $this->id = $id;
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): void {
            $this->nome = $nome;
        }

        public function getCriadoEm(): string {
            return date('d/m/Y - H:i:s', strtotime($this->criadoem));
        }

        public function setCriadoEm(string $criadoem): void {
            $this->criadoem = $criadoem;
        }
    }
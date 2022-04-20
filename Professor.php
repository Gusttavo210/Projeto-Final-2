<?php

class Professor
{
    private int $id;
    private string $nome;
    private string $descricao;
    private bool $status;
    private int $alunoId;
    private string $criadoem;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    public function getAlunoId():int {
        return $this->alunoId;
    }

    public function setAlunoId($alunoId): void {
        $this->categoriaId = $alunoId;
    }

    public function getCriadoEm(): string {
        return date('d/m/Y - H:i:s', strtotime($this->criadoem));
    }

    public function setCriadoEm($criadoem): void {
        $this->criadoem = $criadoem;
    }
}
<?php

class UsuarioService {
    private $repository;

    public function __construct() {
        $this->repository = new UsuarioRepository();
    }

    public function cadastrar(Usuario $usuario): bool {
        return $this->repository->fnAddUsuario($usuario);
    }
    
    public function atualizar(Usuario $usuario): bool {
        return $this->repository->fnUpdateUsuario($usuario);
    }
    
    public function atualizarSenha(Usuario $usuario): bool {
        return $this->repository->fnUpdateSenhaUsuario($usuario);
    }
    
    public function login(Usuario $usuario) {
        return $this->repository->fnLoginUsuario($usuario);
    }
    
    public function listar($limit) {
        return $this->repository->fnLisUsuarios($limit);
    }
    
    public function LocalizarPorId($id) {
        return $this->repository->fnLocalizarUsuario($id);
    }
}
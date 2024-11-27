<?php

class Usuario
{
    public function __construct(

        private int $id_usuario = 0,
        private string $nome_usuario = "",
        private string $email = "",
        private string $senha = "",

    ) {
    }

    //gets
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }


    public function getNomeUsuario()
    {
        return $this->nome_usuario;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }
}

?>
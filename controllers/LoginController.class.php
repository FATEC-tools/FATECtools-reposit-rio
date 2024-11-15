<?php

class LoginController
{

    public function login() {
        require_once "views/pagina_login.html";
    }

    
    public function cadastrar() {
        require_once "views/pagina_cadastro.html";
    }

    public function redefinir() {
        require_once "views/pagina_redefinir.html";
    }
}

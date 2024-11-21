<?php

class LoginController
{

    public function login() {
        require_once "views/pagina_login.php";
    }

    
    public function cadastrar() {
        require_once "views/pagina_cadastro.php";
    }

    public function redefinir() {
        require_once "views/pagina_redefinir.php";
    }
}

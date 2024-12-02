<?php

class InicioController
{


    public function inicio()
    {

        $ferramentaDAO = new FerramentaDAO();

        $retorno = $ferramentaDAO->buscar_por_categoria(2);

        require_once "views/index.php";
    }

}// fim classe

?>
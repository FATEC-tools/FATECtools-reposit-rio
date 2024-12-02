<?php

class PaginaAppController{

    public function inicio(){
        
        $ferramenta = new Ferramenta($_GET["id"]);

        $ferramentaDAO = new FerramentaDAO();

        $retorno = $ferramentaDAO->buscar_uma_ferramenta($ferramenta);

        require_once "views/pagina_aplicativo.php";
        
    }
}
?>
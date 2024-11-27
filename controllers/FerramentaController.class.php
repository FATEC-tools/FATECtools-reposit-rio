<?php

class FerramentaController
{

    public function inserir()
    {

        $msg = array("", "", "", "", "");

        $erro = false;

        if ($_POST) {

            

            if (empty($_POST["nome"])) {

                $msg[0] = '<p style="color: red;">Preencha o campo Nome</p>';

                $erro = true;

            }

            if (empty($_POST["link"])) {

                $msg[1] = '<p style="color: red;">Preencha o campo Link para download</p>';

                $erro = true;

            }

            if (empty($_POST["descricao"])) {

                $msg[2] = '<p style="color: red;">Preencha o campo Descrição</p>';

                $erro = true;

            }

            if ($_POST["categoria"] == 0) {

                $msg[3] = '<p style="color: red;">Escolha uma Categoria</p>';

                $erro = true;

            }

            if($_FILES["imagem"]["name"] == ""){

                $msg[4] = '<p style="color: red;">Escolha uma Imagem</p>';

                $erro = true;
            }


            if (!$erro) {

                $categoria = new CategoriaFerramenta($_POST["categoria"]);

                $ferramenta = new Ferramenta(nome: $_POST["nome"], linkDownload: $_POST["link"], descricao: $_POST["descricao"], categoriaFerramenta: $categoria, situacao: "Ativa", imagem: $_FILES["logoFerramenta"]["name"]);

                $ferramentaDAO = new FerramentaDAO();

                $ferramentaDAO->inserir($ferramenta);

                die();

            }

        }

        $categoriaFerramentaDAO = new CategoriaFerramentaDAO();
        $retorno = $categoriaFerramentaDAO->buscar_todas();

        require_once "views/cadastrar_ferramenta.php";
    }

}
?>
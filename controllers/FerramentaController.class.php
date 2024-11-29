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

            if ($_FILES["logoFerramenta"]["name"] == "") {

                $msg[4] = '<p style="color: red;">Escolha uma Imagem</p>';

                $erro = true;
            }


            if (!$erro) {

                $categoria = new CategoriaFerramenta($_POST["categoria"]);

                $ferramenta = new Ferramenta(nome: $_POST["nome"], descricao: $_POST["descricao"], linkDownload: $_POST["link"], logoFerramenta: $_FILES["logoFerramenta"]["name"], situacao: "Ativa", categoriaFerramenta: $categoria);

                $ferramentaDAO = new FerramentaDAO();

                $retorno = $ferramentaDAO->inserir($ferramenta);            

                header("location:/fatec-tools/cadastrar-ferramenta?msg=$retorno");

                die();

            }

        }

        $categoriaFerramentaDAO = new CategoriaFerramentaDAO();
        $retorno = $categoriaFerramentaDAO->buscar_todas();

        require_once "views/cadastrar_ferramenta.php";

    } //fim metodo inserir

}// fim classe
?>
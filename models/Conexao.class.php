<?php

class Conexao
{
    public function __construct(protected $db = null)
    {

        //definindo banco
        $parametros = "mysql:host=localhost;dbname=fatectoolsbanco;";

        try {

            //tenta realizar a conexão com o banco
            $this->db = new PDO($parametros, "root", "");

        } catch (PDOException $e) {

            //tratamento de erro caso não consiga a conexão, ira retornar o codigo e a mensagem de erro
            throw new Exception($e->getMessage(), $e->getCode(), $e);

            //die(); //mata a execução do script

        }
    }


}
?>
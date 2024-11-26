<?php

class CategoriaFerramentaDAO extends Conexao
{

    public function __construct()
    {
        parent::__construct();
    }

    public function inserir($categoriaFerramenta)
    {
        //preparendo frase SQL, apos a preparação mudamos o "VALUE"
        $sql = "INSERT INTO categorias_ferramentas(descritivo) VALUES(?)";

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $categoriaFerramenta->getDescritivo());
            $stm->execute();

            $this->db = null;

            return "Categoria inserida com sucesso";

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function alterar($categoriaFerramenta)
    {

        $sql = "UPDATE categorias_ferramentas SET descritivo=? WHERE id_categoria_ferramenta=?";

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $categoriaFerramenta->getDescritivo());
            $stm->bindValue(2, $categoriaFerramenta->getIdCategoriaFerramenta());

            $stm->execute();
            $this->db = null;

            return "Categoria alterada com sucesso";

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function excluir($categoriaFerramenta)
    {

        $sql = "DELETE FROM categorias_ferramentas WHERE id_categoria_ferramenta=?";

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $categoriaFerramenta->getIdCategoriaFerramenta());

            $stm->execute();
            $this->db = null;

            return "Categoria excluida com sucesso";

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function buscar_todas()
    {

        $sql = "SELECT * FROM categorias_ferramentas";

        try {

            $stm = $this->db->prepare($sql);

            $stm->execute();

            $retorno = $stm->fetchAll(PDO::FETCH_OBJ);

            $this->db = null;

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function buscar_uma_categoria($categoriaFerramenta)
    {

        $sql = "SELECT * FROM categorias_ferramentas WHERE id_categoria_ferramenta=?";

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $categoriaFerramenta->getIdCategoriaFerramenta());

            $stm->execute();
            $this->db = null;

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }
}

?>
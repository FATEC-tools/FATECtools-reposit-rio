<?php

class FerramentaDAO extends Conexao
{

    public function __construct()
    {
        parent::__construct();
    }


    public function inserir($ferramenta)
    {

        $sql = "INSERT INTO ferramentas (nome, descricao, link_download, situacao, logoFerramenta) VALUES(?, ?, ?, ?, ?)";

        try {

            //frase para inserir Ferramenta
            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $ferramenta->getNome());
            $stm->bindValue(2, $ferramenta->getDescricao());
            $stm->bindValue(3, $ferramenta->getLinkDownload());
            $stm->bindValue(4, $ferramenta->getSituacao());
            $stm->bindValue(5, $ferramenta->getLogoFerramenta());

            $stm->execute();

            $idFerramenta = $this->db->lastInsertId();

            $this->db = null;

            $this->inserir_categoria($ferramenta, $idFerramenta);

            return "Ferramenta inserida com sucesso";


        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function alterar($ferramenta)
    {

        $sql = 'UPDATE ferramentas SET nome=?, descricao=?, link_download=?, situacao=?, logoFerramenta=? WHERE id_ferramenta=?';

        try {

            //frase para inserir Ferramenta
            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $ferramenta->getNome());
            $stm->bindValue(2, $ferramenta->getDescricao());
            $stm->bindValue(3, $ferramenta->getLinkDownload());
            $stm->bindValue(4, $ferramenta->getSituacao());
            $stm->bindValue(5, $ferramenta->getLogoFerramenta());

            $stm->execute();

            $this->db = null;

            return "Ferramenta alterada com sucesso";

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function excluir($ferramenta)
    {

        $sql = 'DELETE FROM ferramentas WHERE id_ferramenta=?';

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $ferramenta->getIdFerramenta());

            $stm->execute();

            $this->db = null;

            return "Ferramenta excluída com sucesso";

        } catch (PDOException $e) {

            echo $e->getCode();
            echo $e->getMessage();
            die();

        }
    }

    public function buscar_todas()
    {

        $sql = "SELECT f.*, (SELECT c.descricao FROM categorias_ferramentas as c INNER JOIN ferramentas_categoriasferramentas as fc ON (fc.id_cat_ferramenta = c.id_cat_ferramenta) WHERE fc.id_ferramenta = f.id_ferramenta) AS descricao FROM ferramentas as f";


        //usado as frases SQL como mecanisomo de segurança
        try {

            //fazendo a conexão e preparação da frase SQL
            $stm = $this->db->prepare($sql);

            //executando a frase SQL
            $stm->execute();

            $this->db = null;

            //irá retornar um array de objetos
            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }

    }

    public function buscar_por_categoria($id_categoria){

        $sql = "SELECT f.*, (SELECT c.descricao FROM categorias_ferramentas as c INNER JOIN ferramentas_categoriasferramentas as fc ON (fc.id_cat_ferramenta = c.id_cat_ferramenta) WHERE fc.id_ferramenta = f.id_ferramenta) AS descricao FROM ferramentas as f WHERE f.id_ferramenta in (select id_ferramenta from ferramentas_categoriasferramentas where id_cat_ferramenta = ?)";

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $id_categoria);

            $stm->execute();
            $this->db = null;

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }

    }

    public function buscar_uma_ferramenta($ferramenta)
    {
        $sql = "SELECT f.*, 
        (SELECT c.id_cat_ferramenta FROM categorias_ferramentas as c INNER JOIN ferramentas_categoriasferramentas as fc ON (fc.id_cat_ferramenta = c.id_cat_ferramenta) WHERE fc.id_ferramenta = f.id_ferramenta) AS id_cat_ferramenta, 
        (SELECT c.descricao FROM categorias_ferramentas as c INNER JOIN ferramentas_categoriasferramentas as fc ON (fc.id_cat_ferramenta = c.id_cat_ferramenta) WHERE fc.id_ferramenta = f.id_ferramenta) AS descritivo 
        FROM ferramentas as f WHERE f.id_ferramenta=?";

        try {

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $ferramenta->getIdFerramenta());

            $stm->execute();
            $this->db = null;

            return $stm->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }

    }

    public function inserir_categoria($ferramenta, $idFerramenta)
    {
        $sql = "INSERT INTO ferramentas_categoriasferramentas (id_ferramenta, id_cat_ferramenta) VALUES (?, ?)";


        try {

            parent::__construct();

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $idFerramenta);
            $stm->bindValue(2, $ferramenta->getCategoriaFerramenta()->getIdCategoriaFerramenta());


            $stm->execute();
            $this->db = null;


        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function alterar_ferramenta($ferramenta)
    {

        $sql = "UPDATE ferramentas SET nome=?, descricao=?, link_download=?, situacao=?, logoFerramenta=? WHERE id_ferramenta = ?";

        try {
            
            parent::__construct();

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $ferramenta->getNome());
            $stm->bindValue(2, $ferramenta->getDescricao());
            $stm->bindValue(3, $ferramenta->getLinkDownload());
            $stm->bindValue(4, $ferramenta->getSituacao());
            $stm->bindValue(5, $ferramenta->getLogoFerramenta());
            $stm->bindValue(6, $ferramenta->getIdFerramenta());

            $stm->execute();
            $this->db = null;

            
            $this->alterar_categoria($ferramenta);

            return "Ferramenta alterada com sucesso";

        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }

    public function alterar_categoria($ferramenta)
    {
        $sql = "INSERT INTO ferramentas_categoriasferramentas (id_ferramenta, id_cat_ferramenta) VALUES (?, ?)";

        $sql = "UPDATE ferramentas_categoriasferramentas SET id_ferramenta=?, id_cat_ferramenta=? WHERE id_ferramenta = ?";



        try {

            parent::__construct();

            $stm = $this->db->prepare($sql);

            $stm->bindValue(1, $ferramenta->getIdFerramenta());
            $stm->bindValue(2, $ferramenta->getCategoriaFerramenta()->getIdCategoriaFerramenta());
            $stm->bindValue(3, $ferramenta->getIdFerramenta());


            $stm->execute();
            $this->db = null;


        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die();
        }
    }


}//Fim Classe

?>
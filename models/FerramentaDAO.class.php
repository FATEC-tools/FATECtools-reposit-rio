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

    public function buscar_todos_por_categoria()
    {

        $sql = "SELECT p.*, c.descritivo FROM ferramentas as p, categorias_ferramentas as c WHERE p.id_cat_ferramenta = c.id_cat_ferramenta in (SELECT id_cat_ferramenta FROM categorias_ferramentas WHERE nome = ?)";


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


    public function buscar_uma_ferramenta($ferramenta)
    {

        $sql = "SELECT * FROM ferramentas WHERE id_ferramenta=?";

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


}//Fim Classe

?>
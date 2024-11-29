<?php

class Ferramenta
{

    public function __construct(

        private int $id_ferramenta = 0,
        private string $nome = "",
        private string $descricao = "",
        private string $linkDownload = "",
        private string $logoFerramenta = "",
        private string $situacao = "",
        //private array $imagens = [],

        //agregação 
        private $categoriaFerramenta = null,
    ) {
    }

    
    public function getIdFerramenta(): int
    {
        return $this->id_ferramenta;
    }

    public function setIdFerramenta(int $id_ferramenta): void
    {
        $this->id_ferramenta = $id_ferramenta;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getLinkDownload(): string
    {
        return $this->linkDownload;
    }

    public function setLinkDownload(string $linkDownload): void
    {
        $this->linkDownload = $linkDownload;
    }

    public function getLogoFerramenta(): string
    {
        return $this->logoFerramenta;
    }

    public function setLogoFerramenta(string $logo): void
    {
        $this->logoFerramenta = $logo;
    }

    public function getSituacao(): string
    {
        return $this->situacao;
    }

    public function setSituacao(string $situacao): void
    {
        $this->situacao = $situacao;
    }

    public function getCategoriaFerramenta()
    {
        return $this->categoriaFerramenta;
    }

    public function setCategoriaFerramenta($categoriaFerramenta): void
    {
        $this->categoriaFerramenta = $categoriaFerramenta;
    }

}
?>
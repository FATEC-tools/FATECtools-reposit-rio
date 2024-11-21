<?php

class CategoriaFerramenta
{
    public function __construct(

        private int $id_categoriaFerramenta = 0,
        private string $descritivo = "",
    ) {
    }

    public function getIdCategoriaFerramenta(): int
    {
        return $this->id_categoriaFerramenta;
    }

    public function setIdCategoriaFerramenta(int $id_categoriaFerramenta): void
    {
        $this->id_categoriaFerramenta = $id_categoriaFerramenta;
    }

    public function getDescritivo(): string
    {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void
    {
        $this->descritivo = $descritivo;
    }
}

?>
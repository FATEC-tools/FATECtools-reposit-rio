<?php

class Curso
{

    public function __construct(

        private int $id_curso = 0,
        private string $descritivo = "",

        //agregação
        private $discplina = null,

    ) {
    }

    public function getIdCurso(): int
    {
        return $this->id_curso;
    }

    public function setIdCurso(int $id_curso): void
    {
        $this->id_curso = $id_curso;
    }

    public function getDescritivo(): string
    {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void
    {
        $this->descritivo = $descritivo;
    }

    public function getDisciplina()
    {
        return $this->discplina;
    }

    public function setDisciplina($discplina): void
    {
        $this->discplina = $discplina;
    }
}
?>
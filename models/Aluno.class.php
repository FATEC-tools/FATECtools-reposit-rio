<?php

class Aluno extends Usuario{

    public function __construct(
        
        private int $id_aluno = 0,

    ){
        parent::__construct();
    }

    public function getIdAluno(): int
    {
        return $this->id_aluno;
    }

    public function setIdAluno(int $id_aluno): void
    {
        $this->id_aluno = $id_aluno;
    }
}
?>
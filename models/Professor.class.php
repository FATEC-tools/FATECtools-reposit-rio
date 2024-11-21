<?php

class Professor extends Usuario
{

    public function __construct(
        private int $id_professor = 0,
    ) {

        parent::__construct();
        
    }

    public function getIdProfessor(): int
    {
        return $this->id_professor;
    }

    public function setIdProfessor(int $id_professor): void
    {
        $this->id_professor = $id_professor;
    }
}
?>
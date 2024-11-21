<?php

class Disciplina {

    public function __construct(
        private int $id_discplina = 0,
        private string $descritivo = "",

    ){}

    public function getIdDisciplina(): int {
        return $this->id_discplina;
    }

    public function setIdDisciplina(int $id_discplina): void {
        $this->id_discplina = $id_discplina;
    }

    public function getDescritivo(): string {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void {
        $this->descritivo = $descritivo;
    }

}
?>
<?php

class Admin extends Usuario
{

    public function __construct(
        private int $id_admin = 0,

    )
    {
        parent::__construct();
    }

    public function getIdAdmin(): int
    {
        return $this->id_admin;
    }

    public function setIdAdmin(int $id_admin): void
    {
        $this->id_admin = $id_admin;
    }
}
?>
<?php

class Usuario {
    private $id;
    private $nombre;
    private $email;
    private $dineroCuenta;
    private $totalPagar;

    // Constructor
    public function __construct($id, $nombre, $email, $dineroCuenta,$totalPagar) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->dineroCuenta = $dineroCuenta;
        $this->totalPagar = $totalPagar;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDineroCuenta()
    {
        return $this->dineroCuenta;
    }
    public function getTotalPagar()
    {
        return $this->totalPagar;
    }
}

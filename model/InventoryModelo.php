<?php

class ProductsInventory
{
    private $idInventory;
    private $codigoProduct;
    private $nameProduct;
    private $description;
    private $existsProduct;
    private $fechaProduct;

    public function __construct(
        $idInventory,
        $codigoProduct,
        $nameProduct,
        $description,
        $existsProduct,
        $fechaProduct,
    )  {    }

    public function getIdInventory() { return $this->idInventory; }
    public function getCodigoProduct() { return $this->codigoProduct; }
    public function getNameProduct() { return $this->nameProduct; }
    public function getDescription() { return $this->description; }
    public function getFechaProduct() { return $this->fechaProduct; }

}
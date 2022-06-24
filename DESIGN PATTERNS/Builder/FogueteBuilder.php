<?php
namespace Builder;

abstract class FogueteBuilder
{
    // private ?FogueteBuilder $foguete = null;

    public function __construct()
    {
        $this->foguete = new FogueteProduct();
    }

    public function getFoguete(): FogueteProduct
    {
        return $this->foguete;
    }

    abstract public function buildTanqueCombustivel(): void;

    abstract public function buildModelo(): void;

    abstract public function buildMotores(): void;

    abstract public function buildNumeroLugares(): void;
}
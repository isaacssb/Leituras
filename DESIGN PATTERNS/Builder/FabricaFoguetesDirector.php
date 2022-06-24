<?php
namespace Builder;

class FabricaFoguetesDirector
{

    protected ?FogueteBuilder $construtorDeFoguetes = null;

    public function __construct(FogueteBuilder $construtorDeFoguetes)
    {

        $this->construtorDeFoguetes = $construtorDeFoguetes;
    }

    public function construirFoguete(): void
    {

        $this->construtorDeFoguetes->buildModelo();
        $this->construtorDeFoguetes->buildMotores();
        $this->construtorDeFoguetes->buildTanqueCombustivel();
        $this->construtorDeFoguetes->buildNumeroLugares();
    }

    public function getFoguete(): FogueteProduct
    {
        return $this->construtorDeFoguetes->getFoguete();
    }
}
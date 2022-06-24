<?php
namespace Builder;

class FogueteProduct
{
    protected float $tanqueCombustivel;

    protected string $modelo;

    protected int $numeroMotores;

    protected int $numeroLugares;

    public function __toString(): string
    {
        $result = "Foguete model: {$this->getModelo()}  <br>\n";
        $result .= "Litros do tanque: {$this->getLitrosCombustivel()}\n <br>";
        $result .= "Número de motores: {$this->getNumeroMotores()}\n <br>";
        $result .= "Número de lugares: {$this->getNumeroLugares()}\n <br>";

        return $result;
    }

    public function getLitrosCombustivel(): float
    {
        return $this->litrosCombustivel;
    }

    public function setLitrosCombustivel(float $litrosCombustivel): FogueteProduct
    {
        $this->litrosCombustivel = $litrosCombustivel;
        return $this;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): FogueteProduct
    {
        $this->modelo = $modelo;
        return $this;
    }

    public function getNumeroMotores(): int
    {
        return $this->numeroMotores;
    }

    public function setNumeroMotores(int $numeroMotores): FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;
        return $this;
    }

    public function getNumeroLugares(): int
    {
        return $this->numeroLugares;
    }

    public function setNumeroLugares(int $numeroLugares): FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;
        return $this;
    }
}
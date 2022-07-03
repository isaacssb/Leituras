<?php
namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando Tesla Modelo S <br />";
  }
  public function frear(): void
  {
    echo "Freando Tesla Modelo S<br />";
  }
  public function trocarMarcha(): void
  {
    echo "Trocando marcha do Tesla Modelo S<br />";
  }
}

?>
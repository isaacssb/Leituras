<?php
namespace FactoryMethod\Product;

class TeslaModeloX implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando Tesla Modelo X<br />";
  }
  public function frear(): void
  {
    echo "Freando Tesla Modelo X<br />";
  }
  public function trocarMarcha(): void
  {
    echo "Trocando marcha do Tesla Modelo X<br />";
  }
}

?>
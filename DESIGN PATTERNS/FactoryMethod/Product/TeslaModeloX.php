<?php
namespace FactoryMethod\Product;

class TeslasModeloX implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando Tesla Modelo X\n";
  }
  public function frear(): void
  {
    echo "Freando Tesla Modelo X\n";
  }
  public function trocarMarcha(): void
  {
    echo "Trocando marcha do Tesla Modelo X\n";
  }
}

?>
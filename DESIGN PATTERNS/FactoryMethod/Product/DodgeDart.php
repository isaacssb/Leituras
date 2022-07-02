<?php
namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando Dodger Dart\n";
  }
  public function frear(): void
  {
    echo "Freando Dodger Dart\n";
  }
  public function trocarMarcha(): void
  {
    echo "Trocando marcha do Dodger Dart\n";
  }
}

?>
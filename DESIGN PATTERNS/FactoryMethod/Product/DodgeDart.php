<?php
namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando Dodger Dart<br />";
  }
  public function frear(): void
  {
    echo "Freando Dodger Dart<br />";
  }
  public function trocarMarcha(): void
  {
    echo "Trocando marcha do Dodger Dart<br />";
  }
}

?>
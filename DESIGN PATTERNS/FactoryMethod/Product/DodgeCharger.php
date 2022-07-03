<?php
namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando Dodge Charger<br />";
  }
  public function frear(): void
  {
    echo "Freando Dodge Charger<br />";
  }
  public function trocarMarcha(): void
  {
    echo "Trocando marcha do Dodge Charger<br />";
  }
}

?>
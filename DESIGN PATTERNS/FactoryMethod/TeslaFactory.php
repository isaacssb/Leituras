<?php
namespace FactoryMethod;

use FactoryMethod\Product\{
  CarroProduct, TeslasModeloS, TeslasModeloX
};

class TeslaFactory implements CarroFactory
{
  public function criarCarro(string $modeloCarro): CarroProduct
  {
    if ($modeloCarro == 'modelo_x') {
      return new TeslasModeloX;
    } elseif ($modeloCarro == 'modelo_s') {
      return new TeslasModeloS;
    } else {
      throw new Exception("Modelo de carro `{$modeloCarro}` não existe no sistema");
    }
  }
}
?>
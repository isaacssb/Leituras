<?php
namespace Decorator;

class Arqueiro extends Personagem
{
  public function __construct()
  {
    $this->nome = 'Mago';
    $this->ataque = '10';
  }
}
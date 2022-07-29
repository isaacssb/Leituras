<?php
namespace Facade;

class ModuloControleClientes
{
  public function buscaCliente( string $cpfCliente ) : array
  {
    // Simula a busca de um cliente pelo seu CPF
    return [
      'nome' => 'Isaac Baratinho',
      'telefone' => '11974685095',
      'email' => 'isaacssb123@gmail.com',
    ];
  }
}
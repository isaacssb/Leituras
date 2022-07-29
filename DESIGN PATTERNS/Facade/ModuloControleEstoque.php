<?php
namespace Facade;

class ModuloControleEstoque
{
  public function registraRetirada(string $codigoDoLivro, int $cpfDoCliente): bool
  {
    // Efetua o registro de retirada do livro
    return true;
  }

  public function validaEstoque(string $codigoDoLivro): bool
  {
    // ... Valida se possui estoque
    echo "Registro de retirada efetuado com sucesso";

    return true;
  }
}
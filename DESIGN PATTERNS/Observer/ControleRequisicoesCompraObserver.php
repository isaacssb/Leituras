<?php
namespace Observer;

class ControleRequisicoesCompraObserver implements
{
  public function atualizado(string $codigo):void
  {
    $this->adicionaListaRequisicaoCompra($codigo);

  }

  public function adicionaListaRequisicaoCompra(string $codigo)
  {
    echo 'Produto adicionado � lista de requisi��es de compra';
  }
}
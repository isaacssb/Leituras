<?php

namespace Adapter;

class Pedido
{

    protected int $numeroPedido;

    protected float $valorTotal;

    protected array $produtos;

    public function getNumeroPedido(): int
    {
        return $this->numeroPedido;
    }


    public function setNumeroPedido(int $numeroPedido): Pedido
    {
        $this->numeroPedido = $numeroPedido;
        return $this;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal): Pedido
    {
        $this->valorTotal = $valorTotal;
        return $this;
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function setProdutos(array $produtos): Pedido
    {
        $this->produtos = $produtos;
        return $this;
    }

    public function addProduto(string $produto)
    {
       $this->produtos[] = $produto;
       return $this;
    }
}
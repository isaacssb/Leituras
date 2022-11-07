<?php
namespace Strategy;

class CompressaoContext
{
  private $compressaoStrategy;

  public function __construct(CompressaoStrategy $compressaoStrategy)
  {
    $this->compressaoStrategy = $compressaoStrategy;
  }

  public function setCompressaoStrategy(CompressaoStrategy $compressaoStrategy) :void
  {
    $this->compressaoStrategy = $compressaoStrategy;
  }

  public function comprimir(string $caminhoArquivo): void
  {
    $this->compressaoStrategy->comprimir($caminhoArquivo);
  }
}

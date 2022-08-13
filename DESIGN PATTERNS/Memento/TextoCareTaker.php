<?php
namespace Memento;

class TextoCareTaker
{
  protected array $estadoTexto = [];

  public function adicionarMemento(TextoMemento $textoMemento): void
  {
    $this->estadoTexto[] = $textoMemento;
  }

  public function retornaUltimoEstadoSalvo(): TextoMemento
  {
    if (empty($this->estadoTexto)) {
      return null;
    }

    $textoMemento = end($this->estadoTexto);
    unset($this->estadoTexto[sizeof($this->estadoTexto) -1]);

    return $textoMemento;
  }

}
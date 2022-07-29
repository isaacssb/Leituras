<?php
namespace Facade;

class ModuloEmail
{
  public function validaServidorDeEmails(): bool
  {
    // Valida se o servidor de emails está funcionando.
    return true;
  }

  public function enviaMensagem(
    string $nomeRemetente,
    string $nomeDestinatario,
    string $enderecoEmailDestinatario,
    string $mensage
  ): bool
  {
    // Simula envio de mensagem de Email
    echo "Email enviado com sucesso.";
    return true;
  }
}
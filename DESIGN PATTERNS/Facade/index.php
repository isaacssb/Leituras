<?php
require_once('../autoloader.php');

$bibliotecaFacade = new \Facade\BibliotecaFacade();

$codigoLivro = '123456';
$cpfCliente = '12345678998';

$efetouRetirada = $bibliotecaFacade->efetuaRetirada($codigoLivro, $cpfCliente);

if ($efetouRetirada) {
  $bibliotecaFacade->disparaMensagens($codigoLivro, $cpfCliente, 'CHAVE_API', 'SENHA_API');
}
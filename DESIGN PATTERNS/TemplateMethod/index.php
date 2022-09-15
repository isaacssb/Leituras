<?php
require_once('../autoloader.php');

$impostosAlimentacao = new \TemplateMethod\ImpostosAlimentacao();
$impostosVestuario = new \TemplateMethod\impostosVestuario();
$impostosEletronicos = new \TemplateMethod\impostosEletronicos();

echo "Pre�o final de alimenta��o:" . $impostosAlimentacao->calculaImpostosProduto(10);
echo '<br/>';

echo "Pre�o final de vestu�rio:" . $impostosVestuario->calculaImpostosProduto(10);
echo '<br/>';

echo "Pre�o final de Eletr�nicos:" . $impostosEletronicos->calculaImpostosProduto(10);
echo '<br/>';

<?php
require_once('../autoloader.php');

$impostosAlimentacao = new \TemplateMethod\ImpostosAlimentacao();
$impostosVestuario = new \TemplateMethod\impostosVestuario();
$impostosEletronicos = new \TemplateMethod\impostosEletronicos();

echo "Preço final de alimentação:" . $impostosAlimentacao->calculaImpostosProduto(10);
echo '<br/>';

echo "Preço final de vestuário:" . $impostosVestuario->calculaImpostosProduto(10);
echo '<br/>';

echo "Preço final de Eletrõnicos:" . $impostosEletronicos->calculaImpostosProduto(10);
echo '<br/>';

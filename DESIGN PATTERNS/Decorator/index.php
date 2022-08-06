<?php
require_once('../autoloader.php');

$decorator = new \Decorator\Mago();

$decorator = new \Decorator\AnelDeFogo($decorator);
$decorator = new \Decorator\AnelDeFogo($decorator);
$decorator = new \Decorator\ColarDaForca($decorator);
$decorator = new \Decorator\EspadaMagica($decorator);

echo $decorator->getNome();
echo '<br/>';

echo "Ataque = {$decorator->getAtaque()}";
echo '<br/>';
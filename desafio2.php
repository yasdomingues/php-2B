<?php

$quantidade = 2;
$precoProduto = 4500.50;
$descontoFixo = 250.00;

$subtotal = $quantidade * $precoProduto;
$total = $subtotal - $descontoFixo;

echo "--- RESUMO DA COMPRA --- <br>";
echo "subtotal: R$ " . $subtotal . "<br>";
echo "total a pagar: R$ " . $total;

?>


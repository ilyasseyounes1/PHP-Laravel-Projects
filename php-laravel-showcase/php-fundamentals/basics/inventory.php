<?php
$product = "Shirt";
$price =  33;
$stock = 17;
$minStock = 100;

$totalValue  = $price * $stock;

if ($stock >= $minStock) {
    echo "Stock is out of stock";
}else {
    echo "Sufficient Stock $stock , $minStock , $totalValue";
}

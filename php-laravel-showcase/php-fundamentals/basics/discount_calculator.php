<?php
// ilyasse younes 27/10/2025
// Vars and data types :
$productName = "Laptop";
$originalPrice = 100;
$discountRate = 0.15;
$isOnSale = true;

// Operators
$discountAmount = $originalPrice * $discountRate;
$finalPrice = $originalPrice - $discountAmount;

// Control
if ($isOnSale) {
    echo "Product: $productName <br>";
    echo "Original Price : $originalPrice <br>";
    echo "Discount Price : " . ($discountRate * 100) . "%<br>";
    echo "Firnal Price : $finalPrice <br>";
}else {
    echo "No sale active for  .$productName Price: $originalPrice <br>";
}

?>
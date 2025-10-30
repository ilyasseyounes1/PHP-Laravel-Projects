// ilyasse-younes
<?php
// Basic function with parameters and return value
function calculateDiscount($price, $discountPercent) {
    $discount = $price * ($discountPercent / 100);
    return $price - $discount;
}

$finalPrice = calculateDiscount(100, 20); // Returns 80
echo "Final Price: $" . $finalPrice; // Output: Final Price: $80


// Function with default parameters
function greetCustomer($name, $greeting = "Hello") {
    return "$greeting, $name!";
}

echo greetCustomer("Alice"); // Output: Hello, Alice!
echo greetCustomer("Bob", "Welcome"); // Output: Welcome, Bob!


// Function with multiple return types (type hints)
function validateEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

var_dump(validateEmail("user@example.com")); // Output: bool(true)
var_dump(validateEmail("invalid-email")); // Output: bool(false)


// Anonymous functions (closures)
$multiply = function($a, $b) {
    return $a * $b;
};

echo $multiply(5, 3); // Output: 15


// Arrow functions (PHP 7.4+) - shorter syntax
$add = fn($a, $b) => $a + $b;
echo $add(10, 5); // Output: 15
?>
<?php
// utils.php - Your utility functions library

// Currency formatting
function formatPrice($price) {
    return "$" . number_format($price, 2);
}

// Validate user input
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Generate product slug from title
function slugify($text) {
    $text = strtolower($text);
    $text = str_replace(" ", "-", $text);
    $text = preg_replace("/[^a-z0-9-]/", "", $text);
    return $text;
}

// Calculate discount savings
function calculateSavings($original, $discounted) {
    $savings = $original - $discounted;
    $percent = ($savings / $original) * 100;
    return [
        "amount" => $savings,
        "percent" => round($percent, 2)
    ];
}

// Validate email format
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Check stock status
function getStockStatus($quantity) {
    if ($quantity === 0) return "Out of Stock";
    if ($quantity < 10) return "Low Stock";
    return "In Stock";
}

// Filter products by price range
function filterByPrice($products, $minPrice, $maxPrice) {
    return array_filter($products, function($product) use ($minPrice, $maxPrice) {
        return $product["price"] >= $minPrice && $product["price"] <= $maxPrice;
    });
}

// Usage Examples
$products = [
    ["name" => "Laptop", "price" => 999.99],
    ["name" => "Mouse", "price" => 25.50],
    ["name" => "Keyboard", "price" => 79.99],
    ["name" => "Monitor", "price" => 299.99]
];

// Test the functions
echo formatPrice(99.5); // Output: $99.50

$affordable = filterByPrice($products, 20, 100);
foreach ($affordable as $product) {
    echo $product["name"] . "\n"; // Output: Mouse, Keyboard
}

$savings = calculateSavings(100, 75);
echo "Saved: " . formatPrice($savings["amount"]); // Output: Saved: $25.00
echo " (" . $savings["percent"] . "%)"; // Output: (25%)

echo getStockStatus(5); // Output: Low Stock
?>
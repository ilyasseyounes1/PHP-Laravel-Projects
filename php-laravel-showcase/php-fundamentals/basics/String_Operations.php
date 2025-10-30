<?php
// String length and case conversion
$text = "Hello Moracami";
echo strlen($text); // Output: 11
echo strtoupper($text); // Output: HELLO WORLD
echo strtolower($text); // Output: hello world
echo ucfirst($text); // Output: Hello world


// Finding and replacing
$email = "ilyasse@example.com";
echo strpos($email, "@"); // Output: 4 (position of @)
echo str_replace("example", "domain", $email); // Output: user@domain.com


// Substring operations
$fullName = "Alice Johnson";
echo substr($fullName, 0, 5); // Output: Alice
echo substr($fullName, 6); // Output: Johnson


// String trimming
$input = "  hello  ";
echo trim($input); // Output: hello
echo ltrim($input); // Output: hello  (removes left whitespace)
echo rtrim($input); // Output:   hello (removes right whitespace)


// String splitting and joining
$csv = "apple,banana,orange";
$fruits = explode(",", $csv);
// Result: ["apple", "banana", "orange"]

$joined = implode(" | ", $fruits);
// Output: apple | banana | orange


// String formatting
$formatted = sprintf("Price: $%.2f", 19.5); // Output: Price: $19.50
printf("Stock: %d units\n", 100); // Output: Stock: 100 units
?>
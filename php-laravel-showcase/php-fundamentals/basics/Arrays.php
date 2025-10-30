<?php
// Indexed Arrays
$products = ["laptop","phone","tablet"];
echo $products[0];
echo count($products); // output:3

// Add elements
$products [] = "Monitor";
array_push($products,"keyboard","mouse");

// Assocative arrays (key-value pairs)
$user = [
    "name" => "John Doe",
    "age" => 25,
    "gender" => "male",
    "email" =>"ilyass@gmail.com"
];
echo $user["name"]; // john Doe
$user["age"] = 30;

// Multidimensional arrays
$orders = [
    [
        "id" => 1,
        "customer" => "Alice",
        "total" => 150.50
    ],
    [
        "id" => 2,
        "customer" => "Bob",
        "total" => 200.00
    ]
];

echo $orders[0]["customer"]; // Output: Alice
echo $orders[1]["total"]; // Output: 200

// Array manipulation functions
$numbers = [5, 2, 8, 1, 9];

sort($numbers); // Sorts array in place
// Result: [1, 2, 5, 8, 9]

rsort($numbers); // Reverse sort
// Result: [9, 8, 5, 2, 1]

$reversed = array_reverse($numbers);
// Result: reverses without modifying original

echo max($numbers); // Output: 9
echo min($numbers); // Output: 1
echo array_sum($numbers); // Output: 25
?>

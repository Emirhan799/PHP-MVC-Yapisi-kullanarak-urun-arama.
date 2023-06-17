<?php
$products = [];

for ($i = 1; $i <= 100; $i++) {
    $product = [
        'name' => 'Ürün ' . $i,
        'description' => 'Bu ürünün açıklaması.',
        'price' => rand(10, 100),
    ];

    $products[] = $product;
}

$search = $_GET['search'] ?? '';
$searchTerm = strtolower($search);

$filteredProducts = [];
if (empty($searchTerm)) {
    $filteredProducts = $products;
} else {
    foreach ($products as $product) {
        $productName = mb_strtolower($product['name'], 'UTF-8');
        if (mb_stripos($productName, $searchTerm, 0, 'UTF-8') !== false) {
            $filteredProducts[] = $product;
        }
    }
}
?>

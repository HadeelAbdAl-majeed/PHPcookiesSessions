
<?php
$products = ["Laptop", "Phone", "Tablet", "Headphones", "Smart Watch"];

$productsName = $_GET["search"] ?? "";

$results = [];

if ($productsName !== "") {
    foreach ($products as $product) {
        if (stripos($product, $productsName) !== false) {
            $results[] = $product;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Search</title>
</head>
<body>

    <h2>Search Products</h2>

    <form method="GET" action="">
        <input
            type="text" name="search" placeholder="Enter product name"
            value="<?= htmlspecialchars($productsName) ?>"
        >

        <button type="submit">Search</button>
    </form>

    <?php if ($productsName !== ""): ?>

        <h3>Search Results:</h3>

        <?php if (!empty($results)): ?>

            <ul>
                <?php foreach ($results as $product): ?>
                    <li><?= htmlspecialchars($product) ?></li>
                <?php endforeach; ?>
            </ul>

        <?php else: ?>

            <p>No products found</p>

        <?php endif; ?>

    <?php endif; ?>

</body>
</html>
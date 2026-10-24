<?php

 if(isset($_POST["add_to_cart"])){
    $peodects=$_POST["product"];
    $card= isset($_COOKIE["addTOCard"]) ? json_decode($_COOKIE["addTOCard"],true) : [];
    $card[]=$peodects;
    setcookie("addTOCard" ,json_encode($card), time() + 86400);
    header("Location: products.php");
    exit();
    }

?>


<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>Our Products</h1>

    <form method="POST">
        <h3>Laptop - $500</h3>
        <input type="hidden" name="product" value="Laptop">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>

    <form method="POST">
        <h3>Mouse - $20</h3>
        <input type="hidden" name="product" value="Mouse">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>

    <form method="POST">
        <h3>Keyboard - $40</h3>
        <input type="hidden" name="product" value="Keyboard">
        <button type="submit" name="add_to_cart">Add to Cart</button>
    </form>

    <a href="./shoppingCart.php">View Cart</a>

</body>
</html>
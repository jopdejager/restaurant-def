<?php
session_start();
include 'conn.php';

$stml = $connection->prepare("SELECT * FROM products WHERE id=:id");
$stml->execute(['id' => $_GET['id']]);
$product = $stml->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <form action='product_updatelogic.php' name='product_updatelogic' method="POST">
        <label> Id van product: </label>
        <input type="text" name="id_products" value="<?php echo $product['id']?>" required>
        <label>Naam van product: </label>
        <input type="text" name="naam" value="<?php echo $product['naam']; ?>" required>
        <label>Prijs van product: </label>
        <input type="text" name="prijs" value="<?php echo $product['prijs']; ?>" required>
        <input type="submit" value="update product">
    </form>
</body>
</html>
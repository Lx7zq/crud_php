<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id = $id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
        <label>Product Name:</label><br>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br><br>
        
        <label>Description:</label><br>
        <textarea name="description"><?php echo $product['description']; ?></textarea><br><br>
        
        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" required><br><br>
        
        <button type="submit">Update Product</button>
    </form>
</body>
</html>

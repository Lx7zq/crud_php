<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form method="POST" action="store.php">
        <label>Product Name:</label><br>
        <input type="text" name="name" required><br><br>
        
        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>
        
        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>
        
        <button type="submit">Add Product</button>
    </form>
</body>
</html>

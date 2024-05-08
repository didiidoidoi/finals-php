<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Add Products</title>
</head>
<body>
    <h2>Add Products</h2>
    <form action="add_products_process.php" method="post">
        <label>Serial Number:</label><br>
        <input type="text" name="product_id" required><br>

        <label>Name:</label><br>
        <input type="text" name="product_name" required><br>
        
        <label>Brand:</label><br>
        <input type="text" name="product_brand" required><br>
        
        <label>Category:</label><br>
        <input type="text" name="product_category" required><br>
        
        <label>Type:</label><br>
        <input type="text" name="product_type" required><br>
        
        <label>Capital:</label><br>
        <input type="number" name="product_capital" required><br>
        
        <label>Selling Price:</label><br>
        <input type="number" name="product_selling_price" required><br>

        <input type="submit" value="Add Product">
    </form>
    
    <br><br>
    <a href="/WEBSITE/products/products.php"><button>Go Back</button></a>
    <a href="/WEBSITE/products/view_products.php"><button>View Products</button></a>
    <a href="/WEBSITE/dashboard.php"><button>Back to Dashboard</button></a>
</body>
</html>

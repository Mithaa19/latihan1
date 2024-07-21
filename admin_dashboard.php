<?php
session_start();
include 'db_config.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: admin login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is the admin dashboard.</p>
        <a href="add_product.html">Add New Product</a>
        <br><br>
        <a href="products.php">View Products</a>
        <br><br>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>

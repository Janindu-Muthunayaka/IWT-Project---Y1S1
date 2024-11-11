<?php
include "config.php";

if (isset($_POST['updatebtn'])) {
    // Get data from the form
    $productId = $_POST['ProductID'];
    $stock = $_POST['Stock'];
    $sizes = $_POST['Sizes'];
    $price = $_POST['Price'];
    $productName = $_POST['ProductName'];

    // Update data into the product table
    $sql = "UPDATE `product` SET `Stock`='$stock', `Sizes`='$sizes', `Price`='$price', `ProductName`='$productName' WHERE `ProductId`='$productId'";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Successful update, you can redirect the user to a different page
        header("Location: shopdashboard.php?AdminPassword=$AdminPassword");
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jfif" href="images/whitelogo.png" class="center">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Bash Fitness</title>
    <link rel="stylesheet" href="paymentpage.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="homepage.html">Home</a></li>
                <li><a href="trainerpage.html">Trainers</a></li>
                <li><a href="shoppage.html">Shop</a></li>
                <li><a href="reviewdashboard.php">Reviews</a></li>
                <li><a href="planpage.html">Plans</a></li>
                <li><a href="aboutpage.html">About</a></li>
            </ul>
            <div class="logo">
                <a href="profilepage.html">
                    <img src="images/redlogo.png" style="width:80px;height:80px">
                </a>
            </div>
        </div>
    </div>
    <div class="bg">
        <form method="POST" action="updateproduct.php">
            <div class="container">
                <h1>Update Product</h1><br>
                <p>Update product details</p><br>
                <hr>

                <label for="ProductID"><b>Product ID</b></label>
                <input type="text" placeholder="Enter product ID" name="ProductID" required>

                <label for="Stock"><b>Stock</b></label>
                <input type="number" placeholder="Enter stock quantity" name="Stock" required>

                <label for="Sizes"><b>Sizes</b></label>
                <input type="text" placeholder="Enter available sizes" name="Sizes" required>

                <label for="Price"><b>Price</b></label>
                <input type="text" placeholder="Enter product price" name="Price" required>

                <label for="ProductName"><b>Product Name</b></label>
                <input type="text" placeholder="Enter product name" name="ProductName" required>

                <div>
                    <a href="shopdashboard.php?AdminPassword=<?php echo $AdminPassword; ?>" onclick="alert('Product added');">
                        <button type="submit" name="submit">Add</button>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div class="contactinfo">
            <p><h5>Email</h5> Bashfitness@gmail.com</p>
            <p><h5>Phone</h5> 0112345434</p>
            <p><h5>Instagram</h5> Bashfitness</p>
            <p><h5>Admin </h5> Bashadmin@gmail.com</p>
            <p><h5 style="margin-left:80px;">Copyright Reserved © Bash fitness 2023</h5></p>
        </div>
    </footer>
</body>

</html>

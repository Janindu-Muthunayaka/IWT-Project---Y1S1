<?php
include "config.php";


if (isset($_POST['submit'])) {
    // Get data from the form
    $UserEmail = $_POST['UserEmail'];
    $Review = $_POST['Review'];
    $UserName=$_POST['UserName'];
    

    // update data into the trainer table
    $sql = "UPDATE `reviews` SET `ReviewId`='',`UserName`='$UserName',`Body`='$Review' WHERE `UserEmail`='$UserEmail'";


    
    
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: reviewdashboard.php");
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>


<!DOCTYPE html>

<html>

<head>
<link  rel="icon" type="image/jfif" href="images/whitelogo.png" class="center"  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bash Fitness</title>
    <link rel="stylesheet" href="reviewpage.css">
</head>
<body>

<div class="banner">
        <div class="navbar">
            <ul>
                <li><a href="trainerpage.html">Trainers</a></li>
                <li><a href="shoppage.html">Shop</a></li>
                <li><a href="reviewdashboard.php">Reviews</a></li>
                <li><a href="planpage.html">Plans</a></li>
                <li><a href="aboutpage.html">About</a></li>
            </ul>
<div class="logo">
<img src="images/redlogo.png" style="width:80px;height:80px">
</div>
    </div>
</div>
<div class= "bg">
         
    
    <h1 style="margin-top: 30px;">Write your review</h1>
    <form action="updatereview.php" method="POST">
        <input type="text" placeholder="Enter your Email" name="UserEmail" >
        <input type="text" placeholder="Enter your Name" name="UserName" >
        <input type="text" placeholder="Enter your Review" name="Review" >
        <input class="submit" type="submit" value="Submit" name="submit">

    </form> 
    


<footer>
<div class="contactinfo">
        <p><h5>Email</h5> Bashfitness@gmail.com</p>
        <p><h5>Phone</h5> 0112345434</p>
        <p><h5>Instagram</h5> Bashfitness</p>
<p><h5>Admin </h5> Bashadmin@gmail.com</p>
<h5 style="margin-left:80px;">Copyright Reserved ©Bash fitness 2023</h5>
     </div>

</footer>  
</div>
</body>
</html>
  
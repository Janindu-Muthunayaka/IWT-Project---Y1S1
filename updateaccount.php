<?php
include "config.php";

if (isset($_POST['updatebtn'])) {
    // Get data from the form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $goal = $_POST['goal'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $gender = $_POST['gender'];

    // Update data into the user table
    $sql = "UPDATE `user` SET `UserName`='$name', `UserAge`='$age', `UserPassword`='$password', `Goal`='$goal', `Heights`='$height', `Weights`='$weight', `Gender`='$gender' WHERE `UserEmail`='$email'";
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Successful registration, you can redirect the user to a different page
        header("Location: welcomepage.html");
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
    <title>Bash Fitness</title>
    <link rel="stylesheet" href="signuppage.css">
</head>

<body>

<div class="banner">
    <div class="navbar">
        <ul>
            <li><a href="alitpage.html">Home</a></li>
            <li><a href="loginpage.html">Trainers</a></li>
            <li><a href="loginpage.html">Shop</a></li>
            <li><a href="reviewpage.html">Reviews</a></li>
            <li><a href="loginpage.html">Plans</a></li>
            <li><a href="aboutpage.html">About</a></li>
        </ul>
        <div class="logo">
            <img src="images/redlogo.png" style="width:80px;height:80px">
        </div>
    </div>
</div>

<div class="bg">
    <form action="updateaccount.php" method="POST">
        <div class="container">
            <h1>update</h1>
            <p>Please fill this form to update your account</p>
            <hr>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="age"><b>Age</b></label>
            <input type="text" placeholder="Enter your age" name="age" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="goal"><b>Your Goal</b></label>
            <input type="text" placeholder="Type here" name="goal" required>

            <label for="height"><b>Height</b></label>
            <input type="text" placeholder="Enter here" name="height" required>
            <br></br>
            <label for="weight"><b>Weight</b></label>
            <input type="text" placeholder="Enter here" name="weight" required>
            <br></br>

            <label for="gender"><b>Gender</b></label>
            <select id="gender" name="gender">
                <option value="choose">Choose</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br></br>

            <label>
                <input type="checkbox" checked name="remember" style="margin-bottom:15px">Remember me
            </label>

            <p>By creating an account, you agree to our terms and conditions <a href="#" style="color:dodgerblue">Terms & privacy</a>.</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="updatebtn">Update</button>
            </div>
        </div>
    </form>

    <footer>
        <div class="contactinfo">
            <p><h5>Email</h5> Bashfitness@gmail.com</p>
            <p><h5>Phone</h5> 0112345434</p>
            <p><h5>Instagram</h5> Bashfitness</p>
            <p><h5>Admin</h5> Bashadmin@gmail.com</p>
            <h5 style="margin-left:80px;">Copyright Reserved ©Bash fitness 2023</h5>
        </div>
    </footer>
</div>
</body>
</html>

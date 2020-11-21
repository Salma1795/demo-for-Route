
<?php
session_start();

if(isset($_SESSION['userName'])){
    header('location: index.php');
}

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1 class="m-auto">Sign Up</h1>

<form class="form-group m-auto w-75" method="post" action="handleRegister.php">
<div>
<label>User Name:</label>
<input class="form-control" type="text" name="userName" placeholder="enter your name">
</div>

<div>
<label>Email:</label>
<input class="form-control" type="text" name="email" placeholder="enter your email">
</div>
    

<div>
<label>Password:</label>
<input class="form-control" type="password" name="password" placeholder="enter your password">
</div>
   
    <input class="btn btn-success mt-4" type="submit" value="Register">
</form>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
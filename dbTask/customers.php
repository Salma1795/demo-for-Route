<html>

<head>
    <title>Company</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a class="navbar-brand" href="#">Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">20000 </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="form.php">ID </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">Orders <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostSell.php">Most Sell</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mang.php">Mangers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customerForm.php">Customers<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cityForm.php">City</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="richCustomers.php">Rich Customers </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Registration</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!--Header-->
    <header class="w-100 100-vh">

       <div class="overlay">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,112C384,107,480,53,576,80C672,107,768,213,864,256C960,299,1056,277,1152,240C1248,203,1344,149,1392,122.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
          
       </div>


    </header>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>



<?php

//four basic variables for connection with database
$serverName="localhost";
$dbUser='root';
$dbPassword='';
$dbName='sunday_company';

//talk to database

$con = new mysqli($serverName,$dbUser,$dbPassword,$dbName);//object from mysqli

// condition for errors
if($con->connect_error){
    die($con->connect_error);

}

$name=$_POST['name'];

// the SQL query

$queryString = "SELECT customerName FROM customers WHERE customerName LIKE '% $name %' ";


// run on server
$dbResult = $con->query($queryString);

while($row = mysqli_fetch_assoc($dbResult)){
     echo $row['customerName'];
    echo "<br/>";
}
  
?>
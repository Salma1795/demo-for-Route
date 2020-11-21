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
                    <a class="nav-link" href="orders.php">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mostSell.php">Most Sell <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mang.php">Mangers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="customerForm.php">Customers</a>
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

        </div>
    </nav>

    <!--Header-->
    <header class="w-100 100-vh">

       <div class="overlay">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,32L48,53.3C96,75,192,117,288,112C384,107,480,53,576,80C672,107,768,213,864,256C960,299,1056,277,1152,240C1248,203,1344,149,1392,122.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
          <h1 class="adr bg-danger text-center">Best Selling Products</h1>
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

// the SQL query

$queryString = "SELECT products.productName , orderdetails.quantityOrdered, orderdetails.quantityOrdered*orderdetails.priceEach
FROM products, orderdetails 
ORDER BY orderdetails.quantityOrdered DESC LIMIT 20";


// run on server
$dbResult = $con->query($queryString);

// while($row = mysqli_fetch_assoc($dbResult)){
//      echo $row['productName']." ". $row['quantityOrdered']." ". $row['orderdetails.quantityOrdered*orderdetails.priceEach'];
//     echo "<br/>";
// }
  
?>

<table class="table m-auto w-75">
    <thead>
        <th>product Name</th>
        <th>quantity Ordered</th>
        <th>orderdetails.quantityOrdered*orderdetails.priceEach</th>
    </thead>
    <tbody>
        
        <?php 
        while($row = mysqli_fetch_assoc($dbResult)){?>
        <tr>
            <td><?php echo $row['productName'] ?></td>
            <td><?php echo $row['quantityOrdered'] ?></td>
            <td><?php echo $row['orderdetails.quantityOrdered*orderdetails.priceEach'] ?></td>
        </tr>
      <?php 
      }
        ?>               
    </tbody>
</table>
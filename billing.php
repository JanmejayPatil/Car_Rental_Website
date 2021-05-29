<?php 

include('dbConnection.php');

session_start();

$session = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Billing Page</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="billing.css" />
</head>
<body>
<nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#"><i><b>WHEELZ</b></i></a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-Label="Toggle Navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navLinks">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="front.html" class="nav-link">HOME</a>
			</li>
			<li class="nav-item">
				<a href="page2.html" class="nav-link">BOOKINGS</a>
			</li>
			<li class="nav-item">
				<a href="logout.html" class="nav-link">Log Out</a>
			</li>
		</ul>
	</div>
</nav>

<div style="margin : 30px;"><a href="page3.php" class="btn btn-info shadow-sm">Back To Book</a></div> <hr>

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<div>
	
	<h3 class="align-center">Customer Details : </h3> 
	
    
	<?php 
	
	$sql = "SELECT * FROM customer WHERE email='".$session."' ";
	$result = mysqli_query($conn,$sql); 
	$row = mysqli_num_rows($result);
	if($row) {
		echo '<table class="table">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>Customer Name</th>';
		echo '<th>Customer Age</th>';
		echo '<th>Customer Gender</th>';
		echo '<th>Phone No</th>';
		echo '<th>Customer License No</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row["custName"] . "</td>";
		    echo '<td>' . $row["custAge"] . "</td>";
		    echo '<td>' . $row["custGender"] . "</td>";
			echo '<td>' . $row["phoneNo"] . "</td>";
		    echo '<td>' . $row["licenceNo"] . "</td>";
		    echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
}
	
	?>

</div>


<div>
	
	<h3 class="align-center">Car Details : </h3>
	
	<?php 

    if(isset($_REQUEST["delete"])) {
	$sql = "DELETE FROM car WHERE id= {$_REQUEST['id']}";
	if(mysqli_query($conn,$sql)) {
		echo "Delete";
	}
	else {
		echo "Not Deleted";
	}
}

	$sql = "SELECT * FROM car WHERE email='".$session."' ";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
		echo '<table class="table">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>UNIQUE_CAR_ID</th>';
		echo '<th>LICENSE_PLATE_NO</th>';
		echo '<th>MODEL</th>';
		echo '<th>TYPE</th>';
		echo '<th>COLOR</th>';
		echo '<th>YEAR_MADE</th>';
		echo '<th>Action</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row["UNIQUE_CAR_ID"] . "</td>";
		    echo '<td>' . $row["LICENSE_PLATE_NO"] . "</td>";
		    echo '<td>' . $row["MODEL"] . "</td>";
			echo '<td>' . $row["TYPE"] . "</td>";
			echo '<td>' . $row["COLOR"] . "</td>";
			echo '<td>' . $row["YEAR_MADE"] . "</td>";
			echo '<td><form action="" method="POST"><input type="hidden" name="id" value='.$row['id'].'><input type="submit" class="btn btn-sm btn-danger" name="delete" value="Delete"></form></td>';
		    echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}

	?>

</div>

<div>
	
	<h3 class="align-center">Transaction Details : </h3>
	<?php 
	$days =0;
	$price =0;
	$sql = "SELECT * FROM car WHERE email='".$session."' ";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0) {
		echo '<table class="table">';
		echo '<thead>';
		echo '<tr>';
		echo '<th>ODOMETER</th>';
		echo '<th>FUEL_LEVEL</th>';
		echo '<th>RENTAL_PERIOD</th>';
		echo '<th>Per Day Price</th>';
		echo '<th>UNIQUE_CAR_ID</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row["ODOMETER"] . "</td>";
		    echo '<td>' . $row["FUEL_LEVEL"] . "</td>";
		    echo '<td>' . $row["DAYS"] . "</td>";
			echo '<td>' . $row["price"] . "</td>";
			echo '<td>' . $row["UNIQUE_CAR_ID"] . "</td>";
			echo '</tr>';
			$days1 = $row["DAYS"];
			$days = $days + $days1 ;
			$price1 = $row["price"];
			$price = $price + $price1;
		}
		echo '</tbody>';
		echo '</table>';
	}

?>

</div>


</div>
</div>
</div>
<hr>
<div class="container m-3"> 
	<h3>Final Bill Amount:  <span>
	<?php  

    $sql = "SELECT * FROM customer WHERE email='".$session."'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);
	$row1 = mysqli_fetch_assoc($result);
if($row1["custType"] == "emp") {
	$price = $days*$price;
	$discount = ($price *3)/100;
	$total = $price - $discount;
	echo $total;
} else if($row1["custType"] == "manager") {
	$price = $days*$price;
	$discount = ($price *10)/100;
	$total = $price - $discount;
	echo $total; 
} else if($row1["custType"] == "supervisor") {
	$price = $days*$price;
    $discount = ($price *4)/100;
    $total = $price - $discount;
    echo $total; 
} else if($row1["custType"] == "staff") {
	$price = $days*$price;
    $discount = ($price *2)/100;
    $total = $price - $discount;
    echo $total; 
} else {
	$price = $days*$price;
    $total = $price ;
    echo $total; 
}

?> </span>
	  </h3> 	
</div> <hr>
<div class="alert alert-primary" role="alert">
Thank you for connecting with Wheelz. See you again!
</div>
</body>
</html>





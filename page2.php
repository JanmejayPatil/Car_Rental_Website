<?php 

include('dbConnection.php');

session_start();

$session = $_SESSION['email'];



if(isset($_REQUEST["clicked"])) {
  if(($_REQUEST["name"] == "") || ($_REQUEST["number"]=="") || ($_REQUEST["pnumber"]=="") || ($_REQUEST["gender"]=="") ||($_REQUEST["age"]=="") || ($_REQUEST["address"]=="")) {
    $msg = '<div class="alert alert-danger mt-2" role="alert">
    All Fields Are Required !
   </div>';
  }
  else {
    $custname = $_REQUEST["name"];
    $licenceno = $_REQUEST["number"];
    $phoneno = $_REQUEST["pnumber"];
    $custgender = $_REQUEST["gender"];  
    $custage = $_REQUEST["age"];
    $custaddress = $_REQUEST["address"];

    if(isset($_REQUEST["emp"])) {
      $emp = "emp" ;
    } else if(isset($_REQUEST["manager"])) {
      $emp = "manager";
    } else if(isset($_REQUEST["supervisor"])) {
      $emp = "supervisor" ;
    } else if(isset($_REQUEST["staff"])) {
      $emp ="staff" ;
    } else {
      $emp = "customer";
    }

    $sql = "INSERT INTO customer(custName,licenceNo,phoneNo,custGender,custAge,custAddress,email,custType) VALUES('$custname','$licenceno','$phoneno','$custgender','$custage','$custaddress','$session','$emp')";
    $result = mysqli_query($conn,$sql);

    if($result) {
      $msg = '<div class="alert alert-success mt-2" role="alert">
    Success !!
   </div>';
    }
    echo "<script>location.href='page3.php'</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOKING</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style_page2.css">
  <style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button 
  {
  -webkit-appearance: none;
   margin: 0;
  }

</style>
</head>
<body>
<nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="front.php"><i><b>WHEELZ</b></i></a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-Label="Toggle Navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navLinks">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="front.php" class="nav-link">HOME</a>
			</li>
			<li class="nav-item">
				<a href="page2.php" class="nav-link">BOOKINGS</a>
      </li>
      <li class="nav-item">
				<a href="logout.php" class="nav-link">Log Out</a>
			</li>
		</ul>
	</div>
</nav>
<form action="" method="POST">
  <div class="form-row font-weight-bold">
    <div class="form-group col-md-4">
      <label for="name">Customer Name</label>
      <input type="text" class="form-control" id="cust_name" placeholder="Enter your Name" name="name">
    </div>
    <div class="form-group col-md-4">
      <label for="age">Driver's License No.</label>
      <input type="text" class="form-control" id="cust_age" placeholder="Enter your Driver License No." name="number">
    </div>
  	<div class="form-group col-md-3">
      <label for="phonenumber">Phone Number</label>
      <input type="number" class="form-control" name="pnumber" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Gender</label>
      <input type="text" class="form-control" id="inputZip" name="gender">
    </div>
    <div class="form-group col-md-4">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="inputZip" name="age" >
    </div>
  </div>
  <div class="form-group col-md-11 font-weight-bold" style="padding: 0px;">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter pickup location" name="address">
  </div>
  
    <div class="font-weight-bold mb-2">
      <input type="checkbox" id="gridCheck" name="emp" > Are you Employee  
      <input type="checkbox" name="manager"> Manager 
      <input type="checkbox" name="supervisor" > Supervisor/Executive 
      <input type="checkbox" name="staff" > Staff 
    </div>
  
  <button class="btn btn-success" type="submit" name="clicked"> CHOOSE A CAR! </button>
  <button type="button" class="btn btn-secondary">RESET</button>
  <?php if(isset($msg)) {echo $msg;} ?>
</form>

</body>
</html>
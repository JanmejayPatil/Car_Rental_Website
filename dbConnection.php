<?php 

$db_host = "localhost";
$db_user = "root";
$db_password = "";

$conn = mysqli_connect($db_host,$db_user,$db_password);

if(!$conn) {
	die("Connection Unsuccessful");
}

$sql = "CREATE DATABASE wheelz";

if(mysqli_query($conn,$sql)) {
    //
}

$db_name = "wheelz";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);


$sql1 = "CREATE TABLE customer(
    id INT AUTO_INCREMENT PRIMARY KEY,
    custName VARCHAR(250),
    licenceNo VARCHAR(250),
    phoneNo VARCHAR(15),
    custGender VARCHAR(10),
    custAge INT,
    custAddress TEXT,
    email VARCHAR(50),
    custType TEXT
)";

if(mysqli_query($conn,$sql1)) {
    //
}


$sql2 = "CREATE TABLE car(
    id INT AUTO_INCREMENT PRIMARY KEY,
    UNIQUE_CAR_ID VARCHAR(50),
    LICENSE_PLATE_NO VARCHAR(50),
    MODEL VARCHAR(50),
    TYPE VARCHAR(50),
    COLOR VARCHAR(50),
    YEAR_MADE INT,
    ODOMETER INT,
    FUEL_LEVEL VARCHAR(50),
    price INT,
    DAYS INT,
    email VARCHAR(50)
)";

if(mysqli_query($conn,$sql2)) {
    //
}


$sql3 = "CREATE TABLE signup(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50)
)";

if(mysqli_query($conn,$sql3)) {
    //
}


$sql4 = "CREATE TABLE adminsignup(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(50)
)";

if(mysqli_query($conn,$sql4)) {
    //
}


?>
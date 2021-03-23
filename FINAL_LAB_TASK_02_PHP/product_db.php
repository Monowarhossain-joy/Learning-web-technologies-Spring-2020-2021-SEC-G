<?php

	$host 	= "localhost";
	$dbuser = "root";
	$dbpass	= "";
	$dbname	= "product_db";

	function dbConnection(){

		global $host;
		global $dbuser;
		global $dbpass;
		global $dbname;

		return $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	}
	$sql = "CREATE TABLE products (
          Name VARCHAR(30) NOT NULL,
          Buying Price VARCHAR(30) NOT NULL,
          Seling Price VARCHAR(50),
)";
$conn->close();

?>
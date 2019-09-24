<?
	$servername = "localhost";
	$bdname="magazin";//name db
	$username = "root";//name
	$password = "";//password
	$conn = mysqli_connect($servername, $username, $password, $bdname);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>
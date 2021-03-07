<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mydbb";
	$name = $_POST['name'];
	$phn = $_POST['phn'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  $sql = "INSERT INTO reg (name, phn, email, pass) VALUES ('$name', '$phn', '$email', '$pass')";
		  
			  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
		  
$conn = null;

?>
celina ,,,
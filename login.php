<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydbb";
$e=$_POST['email'];
$w=$_POST['pass'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from reg where email='$e' && pass='$w'";
  $res = $conn->query($sql);
   if ($res)
{                               
  echo 'logged succesfully';
}}
catch(PDOException $f) {
  echo $sql . "<br>" . $f->getMessage();
   }

$conn = null;
}
?>

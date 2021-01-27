<?php
if (isset($_POST['submit'])) {}
// echo $_POST['Newsletter'];

$Newsletter = $_POST['Newsletter'];

// $mysqli = new mysqli('localhost', 'root', '', 'wenno');
$dbconnect = mysqli_connect('localhost','root','','wenno');

$sql = "insert into register2(Newsletter) values('$Newsletter')";
$run = mysqli_query($dbconnect, $sql);
if ($run == True){
	echo "Data Submitted successfully";
}
else{
	echo " Data not inserted successfully";
}
//redirect
{
header("location: index.html");
}

?>

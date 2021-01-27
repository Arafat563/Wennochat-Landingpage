<?php
if (isset($_POST['submit'])) {}
// echo $_POST['Newsletter'];

$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];

// $mysqli = new mysqli('localhost', 'root', '', 'wenno');
$dbconnect = mysqli_connect('localhost','root','','wenno');

$sql = "insert into form2(name, number, email) values('$name', '$number', '$email')";
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

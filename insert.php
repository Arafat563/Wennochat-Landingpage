<?php
if (isset($_POST['submit'])) {}
// echo $_POST['Firstname'];
// echo $_POST['Lastname'];
// echo $_POST['Email'];
// echo $_POST['Message'];

$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

// $mysqli = new mysqli('localhost', 'root', '', 'wenno');
$dbconnect = mysqli_connect('localhost','root','','wenno');

// $sql = "insert into register(Firstname,Lastname,Email,Message) values('$Firstname',$Lastname,'$Email','$Message')";
$sql = "insert into form(Firstname,Lastname,Email,Message) values('$Firstname',$Lastname,'$Email','$Message')";
$run = mysqli_query($dbconnect, $sql);
if ($run == True){
	echo "Data Submitted successfully";
}
else{
	echo " Data not inserted successfully";
}

// if ($run == True){
// 	echo " Data inserted successfully";
// }
// else{
// 	echo "Data not inserted successfully";
// }


// if(mysqli_connect_errno($dbconnect)){
//      echo "Failed to connect<br>";
// }
// else{
// echo "Connection successful<br>";
// }

// if (!empty($name) || !empty($email)) {
// 	$host = "Localhost";
// 	$dbUsername="root";
// 	$dbPassword="";
//     $dbName="languages_ratings";


//     $conn=new mysqli($host,$dbUsername,$dbPassword,$dbName);

// 	if(mysqli_connect_error()) {
// 		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
//      } else {
// 		$SELECT ="SELECT Email from id_register Where email= ? Limit 1";
// 		$INSERT ="INSERT Into id_register(name,email) values (?,?)";

// 		$stmt= $conn->prepare($SELECT);
// 		$stmt-> bind_param('s',$email);
// 		$stmt->execute();
// 		$stmt->bind_result($email);
// 		$stmt->store_result();
// 		$rnum =$stmt->num_rows;

// 	if($rnum==0) {
// 		$stmt -> close();
// 		$stmt = $conn->prepare($INSERT);
// 		$stmt-> bind_param('s',$name,$email);
// 		$stmt->execute();
// 		echo "Data inserted successfully";
// 	}else {
// 		echo "This email has been used by another user";
// 	}
// 	$stmt->close();
// 	$conn->close();
// 	}
// }else {
// 	echo "All fields are required";
// 	die();
// }
?>

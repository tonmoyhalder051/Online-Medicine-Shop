<?php  
	$id = $_GET['id'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medico";
	
	$conn = mysqli_connect("localhost", "root", "", "medico");
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "DELETE FROM temp WHERE id = $id";
	$result = $conn->query($sql);
	header('Location:cart.php?id=-1');

?>

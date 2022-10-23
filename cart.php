<?php
	session_start();
		
	$id = $_GET['id'];
	$userId = $_SESSION['id'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medico";
	
	$conn = mysqli_connect("localhost", "root", "", "medico");
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	
	
	if(isset($_POST['submit'])){
		$sql = "SELECT * FROM temp WHERE user_id = $userId";
		
		$result = $conn->query($sql);
		
		foreach($result as $row){
			$sql = "INSERT INTO order_details ( Id, pid, quantity) VALUES ($userId,$row[pid],0)";
			$result = $conn->query($sql);
			//echo " You successfully buy medicine . " ;
		   //header("Location: home.php");
		}
		
		echo "<h1 style='color:red; text-align:center ;'>You successfully buy medicine.</h1>" ;
		
		$sql = "DELETE FROM temp WHERE user_id = $userId";
		
		$result = $conn->query($sql);
		
	}
	

	
	
	if($id>0){
		
		$sql = "INSERT INTO temp ( user_id, pid) VALUES ($userId,$id)";
		$result = $conn->query($sql);
	}	
		

		$sql = "SELECT * FROM temp INNER JOIN product ON temp.pid = product.pid WHERE user_id = $userId";
		$result = $conn->query($sql);	
		
	
	
?>
<!DOCTYPE html>
<html>
<head>
<title>
Project
</title>
<style>
    .tab{
	  overflow: hidden;
      padding:40px;
      background-color:white;
	 }
	  button.q{
		 padding: 30px;
	  }
	 input.f{
	  float: center ;
      padding: 30px;
      border: 2px solid tomato;
      margin-top: 0px;
      margin-right: 16px;
      margin-left:320px;
      margin-bottom:0px:
      font-size: 20px;
      width:510px ;
     }
	 button.dk{
	 float: right ;
	 background-color: white;
	 border: none;
     outline: none;
     cursor: pointer;
     padding: 16px 16px;
     transition: 0.3s;
     font-size: 30px;
     color:#FDFEFE;
    }
	.nav{
      padding:40px;
      background-color:#1F618D;
	}
	button.b{
	 float:center ;
	 background-color: #1F618D;
	 border: none;
     outline: none;
     cursor: pointer;
     padding: 16px 16px;
     transition: 0.3s;
     font-size: 30px;
     color:#FDFEFE;
	 margin-left:130px;
	 }
	.nav button:hover {
      background-color: #ddd;
	 }
	  a:link, a:visited {
         background-color: white;
         color: black;
         border: 2px #1F618D ;
         padding: 10px 20px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
     }
	 .dropdown {
		position: relative;
		display: inline-block;
	}
		
	.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
	}
		
	.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
	}
	
	.dropdown-content a:hover {background-color: #ddd;}

	.dropdown:hover .dropdown-content {display: block;}
    
   
	table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

	td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

	tr:nth-child(even) {
		  background-color: #dddddd;
		}
	   
	
</style>
</head>
<body>
 <?php include "menu.php" ?>

<table style="width:100%">
				  <tr>
					<th>Name</th>
					<th>ProductID</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Manage</th>
				  </tr>
				  
				  <?php  
					foreach($result as $row){
				  ?>

				  <tr>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['pid'];?></td>
					<td></td>
					<td><?php echo $row['price'];?></td>
					<td><a href="remove.php?id=<?php echo $row['id'];?>">Remove</a></td>
				  </tr>
					<?php  }  ?>
				  
</table>
	<form method="post">
		<input type="submit" value="Submit" name="submit" style="margin-left:590px; padding:10px; width:100px;font-size:20px; margin-top:20px;">
	</form>
</body>

</html>
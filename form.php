<?php
	session_start();
	$id = $_GET['id'];
	
	if(isset($_POST['submit'])){
		
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "medico";
			
			$conn = mysqli_connect("localhost", "root", "", "medico");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			
			$userId = $_SESSION['id'];
			//$userId = 10;
			
			$pid = $id;
			$quantity = $_POST['quantity'];
			
			$sql = "INSERT INTO order_details ( Id, pid, quantity) VALUES ($userId,$pid,$quantity)";
			$result = $conn->query($sql);
			
			//header('Location:home.php');
				echo "<h1 style='color:red; text-align:center ;'>You successfully buy medicine.</h1>" ;
		
		
		
	}
	
	
	
	
	
?>

<!DOCTYPE html>
<html>
<head>
<title>
Project
</title>
<style>
      .hav{
	      width:500px;
		  height:700px;
		  background-color:#D6DBDF;
		  border: 4px solid blue;
		  margin-left: 450px;
		  margin-top:50px;
		  
		}
		 button.q{
		 padding: 30px;
		 }
		.tab{
	  overflow: hidden;
      padding:40px;
      background-color:white;
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
	 footer {
      background-color: #777;
      padding: 50px;
      text-align:right;
      text: 5px 3px black;
      color: white;
     }
		
	 
</style>

	<script>
		function calTotal(){
			
			var p = document.getElementById("price").value;
			var q = document.getElementById("quan").value
			document.getElementById("total").value = p*q;
			
		}
	</script>
</head>
<body>
<?php include "menu.php" ?>
<div class="hav">

			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "medico";
			
			$conn = mysqli_connect("localhost", "root", "", "medico");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT pid,name, mg, company,price FROM product where product.pid= $id ";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) { ?>
				<form style="margin-left:60px;" method="post"> 
				
				<h1 style="margin-left:100px;"><b><?php echo $row["name"]; ?></b></h1>  
				<h2 style="margin-left:100px;"><?php echo $row["mg"];?> mg/ml </h2> 
				<h2 style="margin-left:100px;"><?php echo $row["company"]; ?></h2>
				<h3 style="margin-left:100px;"> Quantity:</h3><br>
				<input type="number" value="1" id = "quan" name="quantity" style="margin-left:100px; padding:10px;" onchange="calTotal()">
				<br>
				<h3 style="margin-left:100px;">Total (in taka):</h3><br> 
				
				
				
				<input type="text" name="price" disabled value="<?php echo $row['price']; ?>" id="total" style="margin-left:100px; padding:10px;">
				<input type="hidden" name="price"  value="<?php echo $row['price']; ?>" id="price" disabled>
				<input type="submit" name="submit" value="Submit" style="margin-left:130px; padding:10px; width:100px;font-size:20px; margin-top:20px;">
		
				</form>
			<?php }
		
			} else { echo '0 results'; }
			$conn->close();
			?>
     
    
</div>
</body>
<footer>
      <p> Created by : 
	      Tonmoy Halder &
          Kawser Sajeeb
      </p>		  
</footer>
</html>

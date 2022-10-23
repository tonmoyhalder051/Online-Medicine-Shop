<?php
   if(isset($_POST['submit'])){
	   
		$mobile = trim($_POST['mnumber']);
		$pass= trim($_POST['psw']);
	
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "medico";

		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT password,id, mobile FROM customer where customer.mobile = '$mobile'";	

		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			
			while($row = $result->fetch_assoc()){
				
				if($row["password"] == $pass){
					session_start();
					$_SESSION['name'] = "Manik";
					$_SESSION['id'] = $row['id'];
					header("Location:home.php");
				}else{
					header("Location:login.php");
				}
			
			}
			
		} else {
			echo "You are not register." ;
		}
			
		
		
		

		$conn->close();
				
		
   }
?>

<!DOCTYPE html>
<html>
<head>
<style>

body{
    width:50%;
	margin-top: 100px;
	margin-left:350px;
	}
div{
   float:center;
   background-color:#E5E8E8;

   }
 h2{
     text-align:center;
	 }
input[type=text], input[type=password] {
  width:100%;
  height:70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
p{
 text-align: center;
 font-size:20px;
 }
 a:link{
  color: white;
  }
</style>
</head>
<body>
<div>
<h2>Login Form</h2>

<form method="post">
 

  <div class="container">
    <label for="mnumber"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Number" name="mnumber" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <p><b>New User ?</b><a href="register.php"><b>Sign In</b></a></p>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="submit" class="cancelbtn" name="submit">Cancel</button>
  </div>
</form>
</div>
</body>
</html>
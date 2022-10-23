<?php
   if(isset($_POST['submit'])){
	   
		$uname= trim($_POST['name']);
		$mobile = trim($_POST['mnumber']);
		$pass= trim($_POST['psw']);
		$repass= trim($_POST['psw-repeat']);
		
	
		if($pass == $repass){
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "medico";

			$conn = new mysqli($servername, $username, $password, $dbname);
			
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			
			
			
			
			
			$sql = "INSERT INTO customer(username,password,mobile)VALUES('$uname','$pass','$mobile')";	

			if ($conn->query($sql) === TRUE) {
				$success = "Account is create. Please login.";
			} else {
				$error = "Something wrong happend!";
				echo "Error: " . $sql . "<br>" . $conn->error;
				
			}

			$conn->close();
				
		}else{
			$error = "Password incorrect";
			
		}
   }

?>






<!DOCTYPE html>
<html>
<style>
body{
     width:50%;
	margin-top: 100px;
	margin-left:350px;
	}
input[type=text], input[type=password] {
  width: 95%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 320px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
h1{
   text-align: center;
   }

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form style="border:1px solid #ccc" method="post">
  <div class="container">
    
	<?php 
		if(isset($error)){
			echo '<p style="color:red;">'.$error.'</p>';
		}
		
		if(isset($success)){
			echo '<p style="color:green;">'.$success.'</p>';
		}
	?>
	<h1>Sign In</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
	
	<label for="mnumber"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Number" name="mnumber" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
	

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
 

    <div class="clearfix">
      
      <button type="submit" name="submit" class="signupbtn">Submit</button>
	   <h2 style="text-align:center;"><b > Now Log in..</b><a href="login.php"><b>Log In</b></a></h2>
    </div>
  </div>
</form>

</body>
</html>

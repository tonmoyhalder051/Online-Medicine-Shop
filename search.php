<?php
	session_start();
	$search=$_GET["search"];

	
	//echo $search;
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "medico";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}	
	
		
		$sql = "SELECT * FROM product WHERE product.category= '$search'";
		$result = $conn->query($sql);
		 include "menu.php" ;
		if ($result->num_rows > 0) {
			// output data of each row
				
			while($row = $result->fetch_assoc()) { ?>
			  <li class="pip"><div class="cat">
			 <h1><b><?php echo $row["name"];?></b></h1>
			 <h2><?php echo $row["mg"];?>mg/ml</h2>
			 <h2> <?php echo $row["company"];?></h2>
			 <h1>Pack Size & Price:</h1>;
			 <h2>1 Pack <?php echo $row["price"];?>Taka ( Unit Price<?php echo $row["unit"];?>)</h2>
			 <ul>
				<li class="tip"><a href="form.php?id=<?php echo$row["pid"];?>">Buy</a></li>
				<li class="tip"><a href="cart.php?id=<?php echo $row["pid"];?>">Add Cart</a></li>
			</ul>
		
			 
		     </div></li>
			
		<?php	}
		} else {
			echo "<h1 style='color:red; text-align:center ;'>Sorry. your search is not match !!!!</h1>" ;
		}
		$conn->close();

	?>
<!DOCTYPE html>
<html>
<head>
<style>
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
    .cat{
	     background-color:#E5E8E8;
		 height:450px;
		 width:450px;
		 margin-top:10px;
		 margin-left:100px;
		 border:2px solid red;
        }
     img.bv{
         margin-left:120px;
		 margin-top:30px;
         }
     h1{
       text-align:center;
       }
     h2{
       	text-align:center;
		}
     li.tip{
      display: inline-block;
      font-size: 20px;
      padding: 10px;
	  border: 4px solid blue;
	  text-align: center;
	  background-color:dodgerblue;
	  margin-left:15px;
      }
	  ul{
	   margin-left:50px;
     }
	 li.pip{
	     display:inline-block;
		 }
	 footer {
      background-color: #777;
      padding: 50px;
      text-align:right;
      text: 5px 3px black;
      color: white;
     }
	 button.c{
		 background-color: #D35400;
		 cursor: pointer;
		 padding: 20px 30px;
		 outline: none;
		 cursor: pointer;
		 font-size: 30px;
		 color:#FDFEFE;
		 margin-left:1px;
		 transition: 0.3s;
		 
	 }
	 	 button.q{
			 padding: 30px;
	 }

</style>
</head>
<body>
   
</body>
</html>













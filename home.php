<?php
	session_start();
	// if(isset($_POST['search'])){
		
	// $search= $_POST['search'];
	// $search= preg_replace("#[^0-9a-z]#i","",$search );
	
	
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "medico";

//	Create connection
	// $conn = new mysqli($servername, $username, $password, $dbname);
	//Check connection
	// if ($conn->connect_error) {
		// die("Connection failed: " . $conn->connect_error);
	// }	
	
		
		// $sql = "SELECT pid,name, mg, company, unit ,price  FROM product WHERE product.category= '$search'";
		// $result = $conn->query($sql);
		// if ($result->num_rows > 0) {
			//output data of each row
				
			// while($row = $result->fetch_assoc()) { 
			
			
	
		// } else {
			// echo "0 results";
		// }
		// $conn->close();

	// }		
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
	.pav{
	  overflow: hidden;
      padding:40px;
      background-color:#D6EAF8;
	  }
	h1{
      text-align:center;
      font-size: 100px;
      color:#566573;
  }
    .fav{
       padding:10px;
       background-color:#797D7F;
	   margin-top:3px;
	}
	li.fh{
        display: inline-block;
	    font-size: 30px;
        padding: 20px;
	    text-align: center;
	    margin-left:90px;
	 }
	 button.q{
		 padding: 30px;
	 }
    
    article {
         float:left;
         font-size:24px;
         padding: 50px;
         width:40%;
         background-color: #D5D8DC;
         height: 300px;
		 margin-top:5px;
         }
    .cav{
	     float:right;
         font-size:24px;
         padding: 50px;
         width:44%;
         background-color: #D5D8DC;
         height: 300px;
		 margin-top:5px;
		 margin-left:0px;
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
		.nap{
			padding:30px;
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
    footer{
      background-color: #5D6D7E;
      padding: 50px;
      text-align:right;
      text: 7px 5px black;
      color: white;
	  margin-top:3px;
     }
</style>
</head>
<body>
<?php include "menu.php"; ?>
<div class="pav">
    <h1><marquee> Medico </marquee></h1>
</div>
<div class="fav">
<ul>
    <li class="fh"> Genuine Medicines</li>
	<li class="fh"> Easy Returns & Refunds</li>
	<li class="fh"> Secure Payments</li>
</ul>
</div>
<article>
        <h3> About Medico </h3>
        <p style="text-align:justify;"> In this website you can buy require medicines easily from anywhere and 
		get tips for diseases from online doctors from our website. From our website
		people can get information different type of medicine. After buy medicine Our
		agent will deliver medicine to customer.That’s why they don’t have to suffer.
        </p>
</article>
<article class="cav">
      <h3> How to order medicine in Medico ?</h3>
	  <p> It's very simple .</p>
	  <ul>
	      <li> Simply Search </li>
		  <li> Click on the "Buy" button </li>
		  <li> Recieve a confirmation message </li>
		  <li> Deliver at your door steps </li>
	  </ul>
</article>
</body>
<footer>
       
       <h3> Created by : </h3>
	   <p> Tonmoy Halder </p>
	   <p> Kawser Sajeeb </p>
</footer>
</html>
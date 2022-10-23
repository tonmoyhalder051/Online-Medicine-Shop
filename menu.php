<?php
     if(isset($_POST['submit_search'])){
	
 header("location:search.php?search=$_POST[search]") ;
	
	 }
?>	

	 <div>
			<div class="tab">
				<form method="post">
				<input class="f" name="search" type="text" placeholder="Search.." name="search">
                <button class="q" name="submit_search" type="submit"><i class="fa fa-search">>></i></button>
				
				<button class="dk">
			<?php
				if(!empty($_SESSION["name"])){
						echo '<a href="logout.php">Logout</a>';
				}else{
					echo '<a href="login.php">Login</a>';
				}
			?>
			</a></button>
			</form>
		</div>
		<div class="nav">
			<button class="b" style="margin-right:130px;"onclick="window.location.href = 'home.php';">Home</button>
				<div class="dropdown">
					<button class="b dropbtn" style="margin-left:0px;">Medicines</button>
						<div class="dropdown-content">
							<a href="medicine.php">Medicine</a>
							<a href="neu.php">Neurology</a>
							<a href="optha.php">Ophthalmology</a>
							<a href="otola.php">Otolaryngology</a>
							<a href="cardio.php">Cardiology</a>
							<a href="hepa.php">Hepatology</a>
							<a href="hema.php">Hematology</a>
							<a href="darma.php">darmatology</a>
							<a href="gas.php">Gastrology</a>
							<a href="gyno.php">Gynocology</a>
							<a href="ortho.php">Orthopedics</a>
							<a href="pedi.php">Padiatrics</a>
						</div>
				</div>
			<div class="dropdown">
				 <button class="b dropbtn" style="margin-left:120px;">Doctors</button>
					 <div class="dropdown-content" style="margin-left:120px;">
						<a href="medidoc.php">Medicine</a>
						<a href="neudoc.php">Neurology</a>
						<a href="opthadoc.php">Ophthalmology</a>
						<a href="otoladoc.php">Otolaryngology</a>
						<a href="cardoc.php">Cardiology</a>
						<a href="hepadoc.php">Hepatology</a>
						<a href="hemadoc.php">Hematology</a>
						<a href="darmadoc.php">darmatology</a>
						<a href="gasdoc.php">Gastrology</a>
						<a href="gynodoc.php">Gynocology</a>
						<a href="orthodoc.php">Orthopedics</a>
						<a href="pedidoc.php">Padiatrics</a>
					</div>
			</div>
			<button class="b" onclick="window.location.href = 'aboutus.php';">About us</button>
		</div>
	</div>  


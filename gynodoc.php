<?php
	session_start();
		
	
?>
<!DOCTYPE html>
<html>
<head>
<title>
Project
</title>
<style>
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
	.cat{
	     background-color:#E5E8E8;
		 height:800px;
		 width:550px;
		 margin-top:10px;
		 margin-left:60px;
		 border:2px solid red;
        }
     img.bv{
         margin-left:150px;
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
	   
	
</style>
</head>
<body>
   <?php include "menu.php" ?>
  <ul>
     <li class="pip"><div class="cat">
     <img class="bv" src="image/munira.jpg" width="200" height="200">
	 <h1><b>Professor Dr. Munira Ferdausi</b></h1>
	 <h2>Qualification:MBBS, MPH(Dhaka), MS (Obs & Gynae)</h2>
     <h2>Designation: Professor</h2>
	 <h2>Expertise:Gynocology</h2>
	 <h2>Organization:Shaheed Suhrawardy Medical College & Hospital, Sher-E-Bangla Nagor, Dhaka</h2>
	 <h2>Chamber:Lab Aid Diagnostic Center, Uttara</h2>
     <h2>Location: House # 15, Road # 12, Sector # 6, Uttara, Dhaka</h2>
     <h2>Phone: 58950322, 5895316, 58954772, 8952522</h2> 
     </div></li>
     <li class="pip"><div class="cat">
     <img class="bv" src="image/ta.jpg" width="200" height="200">
	 <h1><b>Professor Dr. T A Chowdhury</b></h1>
	 <h2>Qualification: MBBS, FRCS, FRCOG, FRCP, FCPS (Ban), FCPS (Pak)</h2>
     <h2>Designation:Professor </h2>
	 <h2>Expertise: Gynocology</h2>
	 <h2>Organization: BIRDEM (Diabetes) Hospital & Ibrahim Medical College</h2>
     <h2>Chamber:Farida Clinic, 165/A, Shantinagar, Dhaka, Bangladesh</h2>
     <h2>Location:House # 15, Road # 12,Shantinagar, Dhaka.</h2>
     <h2>Phone: +88028321960, +88028321819.</h2>
     </div></li>
  </ul> 
  </body>
  <footer>
      <p> Created by : 
	      Tonmoy Halder &
          Kawser Sajeeb
      </p>		  
</footer>
</html>
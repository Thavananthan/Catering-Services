<?php
session_start();
include 'connectasdb.php'; //connect the connection page

?>

<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   </head>
	
 <body>
          
		 <!-- header start -->  
  
				<div class="logo"> 
                   				<img src="photos/logo1.jpg" height="140px" width="140px"> 
				</div>
				<div class="name"> 
					<center><b><br/>AS CATERING SERVICE </b>
				</div>
				      	<br/><br/><?php $email=$_SESSION["email"];
						           $sql="SELECT * FROM member_details WHERE Email='$email'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   ?>
				<div class="rlogo">
                      <div class="topnav">				
						<span id="fcolor";> welcome :<?php  echo $fname; ?><span/>
						<a href="logout.php"><b id="fcolor2">logout</b></a> 
						<a  href="profileh.php"><b id="fcolor2"> Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
				      </div> 
				</div> 
				          <br/><br/><br/><br/><br/>
				<div id="menu">
				          <div class="topnav">
				      
				         <a class="active" href="homepageh1.php"> <b style="color:white"> HOME &nbsp;&nbsp;&nbsp; </b></a>
					     <a href="order_onlineh.php"> <b style="color:white">ORDER ONLINE &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="about_ush.php"> <b style="color:white">ABOUT US &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="menuh.php"> <b style="color:white">MENU &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="locationh.php"> <b style="color:white">LOCATION &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="feedbackh.php"> <b style="color:white">FEEDBACK &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="hotlineh.php"> <b style="color:white">HOTLINE &nbsp;&nbsp;&nbsp;</b></a>
					  
					       </div>
				</div>  
				    
					<div class="hotline">
					     <center id="offertext"><b> HOTLINE </b><br><br><br>
						     <div class="hotlinetext" align="left">
							<p>Colombo:<br>
							  Telephone Number: 0114578962 <br>
							  Email: AS_Catering_col@gmail.com <br>
							  Address: AS CateringService, R A De Mel Mawatha,Colombo.</p><br>
							  <hr><hr> <br>
							<p>Jaffna:<br>
							  Telephone Number: 0214578965 <br>
							  Email: AS_Catering_Jaf@gmail.com <br>
							  Address: AS CateringService, Hospital Road,Jaffna.</p><br>
							  <hr><hr>  <br>
							  <p>Kandy:<br>
							  Telephone Number: 02178542135 <br>
							  Email: AS_Catering_kandy@gmail.com <br>
							  Address: AS CateringService,Wickrama Rajasinghe Mawatha, Kandy.</p><br>
							  
							 </div>
							 
							 <div class="hotlineimg">
							    <img src="photos/hotline.png" height="600px"width="400px">							
							 </div>
							 
							 
							 
					</div><br><br>
					
					  		
							<div class="foot">
							     <b> © 2017 by AS Catering Service. All Rights Reserved </b> <br/>  
							</div>	<br/><br/> 
				
				       
				
				
  					
 
</body>
</html>	  
					
					
					 
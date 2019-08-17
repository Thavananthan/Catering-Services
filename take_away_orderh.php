<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javascript" src="js file/take.js"> </script>
	   </head>
	
 <body>
          
		 <!-- header start -->  
  
				<div class="logo"> 
                   				<img src="photos/logo1.jpg" height="140px" width="140px"> 
				</div>
				<div class="name"> 
					<center><b><br/>AS CATERING SERVICE </b>
				</div>
				      	<br/><br/>
				<div class="rlogo">
                      <div class="topnav">				
						<a class="active" href="customer/loginh.php"><b id="fcolor2"> Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
						<a href="Registerh.php" ><b id="fcolor2"> Register&nbsp;&nbsp;</b> </a>
				      </div> 
				</div> 
				          <br/><br/><br/><br/><br/>
				<div id="menu">
				          <div class="topnav">
				      
				         <a class="active" href="homepageh.php"> <b style="color:white"> HOME &nbsp;&nbsp;&nbsp; </b></a>
					     <a href="order_onlineh.php"> <b style="color:white">ORDER ONLINE &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="about_ush.php"> <b style="color:white">ABOUT US &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="menuh.php"> <b style="color:white">MENU &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="locationh.php"> <b style="color:white">LOCATION &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="feedbackh.php"> <b style="color:white">FEEDBACK &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="hotlineh.php"> <b style="color:white">HOTLINE &nbsp;&nbsp;&nbsp;</b></a>
					  
					       </div>
				</div>

                <div class="order">
				     <form name="Cash" method="post" onsubmit="return deliveryValidate()">
					 <table id="Rtable">
					  <center> 
					  <b> <span id="offertext"> TAKE AWAY THE ORDER<br/><br/><br/><br/> </span> </b>
                       <tr>
				       <td> Date: 
					     <input type="text" name="date" placeholder="dd/mm/yyyy" id="textbox"> &nbsp;&nbsp;&nbsp;
						 Time: 
						 <input type="text" name="time"id="textbox" placeholder="time"><br><br> </td>
						
						</tr> 
					  
                       
					  
					  
					  
					  
					  <tr>
					       <td>
						            <input type="submit"  value= " GO>> " name="cash" id="buttoncolor"> </td>
					  </tr>	   
					</form>
					</table>
				
				</div>
				
				
				
				            <div class="foot">
							     <b> <p> © 2017 by AS Catering Service. All Rights Reserved </p> </b> <br/>  
							</div>	<br/><br/> 
				
				       
				
				
  					
 
</body>
</html>	  

<?php
include 'connectasdb.php';

if(isset($_POST["cash"]))
		{
			
	    $date=$_POST["date"];
	    $time=$_POST["time"];
	    
	
			
			
				
				echo '<script type="text/javascript">alert(" confirm that order AND YOU CAN PAY THE MONEY WHEN YOUR ORDER IS  TAKEN.");</script>';
				header("location:take_bill.php");
				/*$insertString = "INSERT INTO take_way VALUES('$name','$Email','$phone_num','$comment')";
				
				if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							   }
				        else{
                            echo '<br/>';
                            echo '<script type="text/javascript">alert(" you message send.");</script>';
							
				             */
                             }
				
				
				
				
				
				
		
			
				
?>              
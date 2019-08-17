<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javascript" src="js file/delivery.js"> </script>
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
			    <b> <span id="offertext"> &nbsp;&nbsp; Delivery </span>  </b><br/><br/>
				<form name="delivery" method="post" onsubmit="return deliveryValidate()" action="" >
				<table id="Rtable">
				   <tr>
				       <td> Date: </td>
					    <td> <input type="text" name="date" placeholder="dd/mm/yyyy" id="textbox">&nbsp;&nbsp;&nbsp;&nbsp; Time:   
						     <input type="text" name="time"id="textbox"><br><br> </td>
						
						</tr>
						<tr>
						     <td id="offertext"> Recipient Details </td>
						</tr>

                        <tr>
                            <td> Full Name: </td>
                            <td> <input type="text" name="fname" placeholder="Enter your full name" id="textbox"><br><br> </td>
                        </tr>

                        <tr>
                            <td> Phone Number: </td>
                            <td> <input type="text" name="P_num" placeholder="0776589412"id="textbox"> <br><br></td>
                        </tr>

                        <tr>
                            <td> Address:</td>
                            <td> <textarea name="address" rows="5" cols="35"> </textarea> <br><br> </td>
                        </tr>

                        <tr> 
                             <td> </td>
                             <td> <input type="submit" value="ADD CARD" name="ADDCARD" id="buttoncolor"> </td>
                        </tr>							 
				</table>
				</form>
				
				
				
				
				
				
				</div>
				
				
				                <div class="foot">
							     <b> © 2017 by AS Catering Service. All Rights Reserved </b> <br/>  
							   </div>	<br/><br/> 
				
				       
				
				
  					
 
</body>
</html>	  
<?php
  
  include 'connectasdb.php';


if(isset($_POST["ADDCARD"]))
		{
			$date=$_POST["date"];
	        $time=$_POST["time"];
	        $name=$_POST["fname"];
	        $phone_Num=$_POST["P_num"];
	        $address=$_POST["address"];
			
			
			if($date==""||$time==""||$name==""||$phone_Num==""||$address==""){
				
				 echo '<script type="text/javascript">alert(" Invalid Data");</script>';
			}
		    else{
				
				$insertString = "INSERT INTO delivery_details VALUES('','$date','$time','$name','$phone_Num','$address')";
				
				if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							   }
				        else{
                            echo '<br/>';
                            
							header("location:billdetailsedit.php");
				             
                             }
				
				
				
				
				
			}	
		
			
		}
?>				
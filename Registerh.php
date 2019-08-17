<?

  
  
  ?>

<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javascript" src="js file/reg.js"> </script> 
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
						<a href="Registerh.php"> <b id="fcolor2"> Register&nbsp;&nbsp;</b> </a>
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
				
				   <center>
				    <div class="Register">
					<center id="offertext"/>
					      <b> Become a member </b> <br/>
						   <b id="fcolor">  be a part of AS family.</b> <br/><br/>
						   <table id="Rtable">
						        <form name="register" method="post" onsubmit="formValidateReg()" action="" >
								
						        <tr>									
		
									<td> <input type="text" name="fname" placeholder="first name" id="textbox"><br/><br/> </td>
								</tr>	
								
								<tr>
									
									<td><input type="text" name="lname" placeholder="last name" id="textbox"> <br/><br/> </td>
								</tr>	
								
								<tr> 
								      
									  <td> <input type="email" name="email" placeholder="name@email.com" id="textbox"> <br/><br/> </td>
								</tr>	  
								
								<tr>
								       
									   <td> <input type="text" name="pho_num" placeholder="0771234569" id="textbox"><br/><br/> </td>
								</tr>	

                                <tr>
                                       <td> <input type="password" name="password" placeholder="new password" id="textbox"> <br/><br/> </td>
                                </tr>

                                <tr>
                                        <td> <input type="password" name="confirm_password" placeholder="confirm password" id="textbox"> <br/><br/> </td>
                                </tr>	
                                
								
                                <tr style="float:right">
								        <td ><input type="reset" value="RESET" id="buttoncolor"> &nbsp;&nbsp;</td>
                                       <td>  <input type="submit" value="REGISTER" name="REGISTER" id="buttoncolor"  >  </td>
										
                                </tr>									   
								
								
								</form>
							</table>	
										  
					</div> 
<
				          	<div class="foot">
							     <b> © 2017 by AS Catering Service. All Rights Reserved </b> <br/>  
							</div>	 
				
				       
				
				
					
 
</body>
</html>	  
<?php
       
include 'connectasdb.php';

        if(isset($_POST["REGISTER"]))
		{
			
			$firstName =$_POST["fname"];
            $lastName =$_POST["lname"];
            $Email =$_POST["email"];
			$phone_number=$_POST["pho_num"];
			$pws=$_POST["password"];
			$c_pws=$_POST["confirm_password"];
			
			
			
			
			
			if($firstName==""||$lastName==""|| $Email==""||$phone_number==""||$pws==""||$c_pws==""||$c_pws!=$pws){
				echo "<br/>Error";
				header("location:Registerh.php");
			}
			
		    else {
				
			     if(mysqli_num_rows(mysqli_query($in,"SELECT Email FROM MEMBER_DETAILS WHERE Email='$Email'" )))
				      {
				       
					     echo '<script type="text/javascript">alert("YOUR MAIL ALREDY UESD");</script>';
						} 
						
				else{   
				      $insertString = "INSERT  INTO  MEMBER_DETAILS VALUES('','$firstName', '$lastName', '$Email','$phone_number','$pws','$c_pws')";

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                             echo '<script type="text/javascript">alert("Welcome");</script>';
				            
                             }
				 
				
			       }
		    }	
		}
       
        
    ?>
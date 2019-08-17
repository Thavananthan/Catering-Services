
<?php



?>

<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javescript" src="as.js"> </script>
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
						
						<a class="active" href="loginh.php"><b id="fcolor2"> Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
						
				       </div>
				</div> 
				          <br/><br/><br/><br/><br/>
				<div id="menu">
				          <div class="topnav">
				      
				         <a class="active" href="../homepageh.php"> <b style="color:white"> HOME &nbsp;&nbsp;&nbsp; </b></a>
					     <a href="../order_onlineh.php"> <b style="color:white">ORDER ONLINE &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="../about_ush.php"> <b style="color:white">ABOUT US &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="../menuh.php"> <b style="color:white">MENU &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="../locationh.php"> <b style="color:white">LOCATION &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="../feedbackh.php"> <b style="color:white">FEEDBACK &nbsp;&nbsp;&nbsp;</b></a>
					  	 <a href="../hotlineh.php"> <b style="color:white">HOTLINE &nbsp;&nbsp;&nbsp;</b></a>
					  
					       </div>
				</div> 
				      <center>
				            <div class="login">
					           <center id="offertext"/>
							       <b> Please enter your login details to process </b> <br><br><br><br>
						      <table id="ltable">
						        <form name="login" method="post"  action="" onsubmit="loginValidate()">
								
						        <tr>									
		
									<td>  <input type="email" name="email_l" placeholder="name@email.com" id="textbox" required> <br/><br/> </td>
								</tr>	
								
								<tr>
									
									 <td> <input type="password" name="password_l" placeholder="password" id="textbox" required> <br/><br/> </td>
								</tr>

								 <tr style="float:right">
                                        <td> <input type="submit" value="   login   "  name="login"  id="buttoncolor" > <br/></td>
                                         <td> <span> </span>  </td>
							   </tr>
								
								
								<tr>
								         <td> Forget pasword? <a href="#"> RESET </a> </td>
								</tr>		 
								
                              </form>
								
                               </table>								
							</div>   
							   
							   
							   
                            <div class="foot">
							     <b> © 2017 by AS Catering Service. All Rights Reserved </b> <br/>  
							</div>	<br/><br/> 
				
				       
				
				
					
 
</body>
</html>	  	
	<?php
	session_start();
include 'connectasdb.php'; //connect the connection page
 
   if(isset($_POST["login"])) 
   {

      //check if the username entered is in the database.
       $test_query = "SELECT * FROM member_details WHERE Email = '".$_POST["email_l"]."'";
       $query_result = mysqli_query($in,$test_query);
        //admin page
        if($_POST["email_l"]=="admin@gmail.com"&&$_POST["password_l"]=="admin")
        {
	header("location:../admin/adminh.php");
       }
      //conditions
       
    }
  
   
?>					   
	

    
	
				   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
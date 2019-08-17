
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
					<center><b><br/>AS CATERING SERVICE  ADMIN LOGIN PAGE</b>
				</div>
				      	<br/><br/>
				<div class="rlogo"> 
				      <div class="topnav">				
						
						<a class="active" href="loginh.php"><b id="fcolor2"> Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
						
				       </div>
				</div> 
				          <br/><br/><br/><br/><br/>
				
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
	header("location:adminh.php");
       }
      //conditions
	  
	  else 
	  {
		  echo '<script type="text/javascript">alert(" invalid password OR E mail...");</script>';
				 echo "<script type='text/javascript'> document.location = 'adminlogin.php'; </script>";
	  }
       
    }
  
   
?>					   
	

    
	
				   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
							   
<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javascript" src="feedback.js"> </script>
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
				<center>
				<div class="Register">
				 <center id="fcolor2"><h2><b>FEEDBACK </b></h2> <br>
				 <form name="feedback" method="post" id="fcolor" onsubmit="return feedbackValidate()" action="">
				    <table id="Rtable">
		              <tr>
                             <td> Name:<br/><br/></td>
                             <td> &nbsp;&nbsp;&nbsp;<input type="text" name="name" placeholder="Name" id="textbox"><br/><br/> </td>
                      </tr>
					  <tr>
                             <td> Email:<br/><br/></td> 
                             <td> &nbsp;&nbsp;&nbsp;<input type="email" name="email" placeholder="name@gmail.com" id="textbox"> <br/><br/> </td>
                      </tr>
					  
					  <tr>
                             <td> Phone Number:<br/><br/></td> 
                             <td> &nbsp;&nbsp;&nbsp;<input type="text" name="Pho_num" placeholder="0771245693" id="textbox"> <br/><br/> </td>
                      </tr>
					  
					  <tr>
                             <td> Messages:<br/><br/></td> 
                             <td> &nbsp;&nbsp;&nbsp;<textarea name="address" rows="5" cols="40" border="2px " > </textarea> <br/><br/> </td>
                      </tr>
					  
                					
					<tr style="float:right">
					      <td> </td>
					      <td>  <input type="submit" value="  SEND  " name="SEND" id="buttoncolor"> </td>
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

if(isset($_POST["SEND"]))
		{
			
	    $name=$_POST["name"];
	    $Email=$_POST["email"];
	    $phone_num=$_POST["Pho_num"];
	    $comment=$_POST["address"];
	
			
			if($name==""|| $Email==""||$phone_num==""||$comment==""){
				echo "<br/>Error";
				echo '<script type="text/javascript">alert(" Invalid message send.");</script>';
			}
	        else{
				
				$insertString = "INSERT INTO feedback VALUES('$name','$Email','$phone_num','$comment')";
				
				if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							   }
				        else{
                            echo '<br/>';
                            echo '<script type="text/javascript">alert(" you message send.");</script>';
							
				             
                             }
				
				
				
				
				
			}	
		
			
		}		
?>              
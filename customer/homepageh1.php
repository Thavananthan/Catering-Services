<?php
session_start();
include 'connectasdb.php';

?>





<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javascript" src="js file/addfood.js"> </script>
	   </head>
	
 <body>
          
		 <!-- header start -->  
  
				<div class="logo"> 
                   				<img src="photos/logo1.jpg" height="140px" width="140px"> 
				</div>
				<div class="name"> 
					<center><b><br/>AS CATERING SERVICE </b><br><?php $email=$_SESSION["email"];
						           $sql="SELECT * FROM member_details WHERE Email='$email'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   ?>
					 
				</div>
				      	
				<div class="rlogo">
                      
					  <div class="topnav">	
                        
                        	<span id="fcolor";> welcome :<?php  echo $fname; ?><span/>				  
						<a class="active" href="logout.php"><b id="fcolor2"> Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
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
				           
				
			
		                   <br/><br/><br/>
               
                        <div class="add">
						 <form name="home" method="post" action="">
                                      <center ><b id="offertext"> OFFER ITEMS</b> <br/>
									 <div class="column box"> 
									     <img src="photos/offer2.jpg" style="width:120px;height:90px"> <br/>
										   <b id="fcolor2"> Dakjuk <br/> Price:1400/= <br/>Discount:10% </b><br/>
										   <span id="fcolor"> Quantity: <input type="text" name="num9" style="width:35px;" placeholder="enter the quantity"><br><br/></span>
										   <center > <button type="submit" id="orderbutton" name="order9"   style="width:45px;height:20px;value:order;">order </button>
									 </div>
													
									 
									  <div class="column box"> 
									     <img src="photos/offer1.jpg" style="width:120px;height:90px"> <br/>
										   <b id="fcolor2"> Coxinha<br/> Price:1200/= <br/>Discount:10% </b>
										   <span id="fcolor"> Quantity: <input type="text" name="num10" style="width:35px;" placeholder="enter the quantity"><br><br/></span>
										   <center > <button type="submit" id="orderbutton" name="order10"   style="width:45px;height:20px;value:order;">order </button>
									 </div> <br/><br/>
									 
									 <div class="column box"> 
									     <img src="photos/offer3.jpg" style="width:120px;height:90px"> <br/>
										   <b id="fcolor2"> Yassa<br/> Price:1600/= <br/>Discount:10% </b>
										    <span id="fcolor"> Quantity: <input type="text" name="num11" style="width:35px;" placeholder="enter the quantity"><br><br/></span>
										   <center > <button type="submit" id="orderbutton" name="order11"   style="width:45px;height:20px;value:order;">order </button>
								     </div>	
										<div class="column box"> 
									     <img src="photos/offer4.jpg" style="width:120px;height:90px"> <br/>
										   <b id="fcolor2"> Schnitzel<br/> Price:1900/= <br/>Discount:10% </b>
										   <span id="fcolor"> Quantity: <input type="text" name="num12" style="width:35px;" placeholder="enter the quantity"><br><br/></span>
										   <center > <button type="submit" id="orderbutton" name="order12"   style="width:45px;height:20px;value:order;">order </button>
								     </div>
                            </form>									 
						</div>	
							 
				
				     
					 
					      <div class="table1">
						     <form name="addfood" method="post" onsubmit="return AddfoodVaildate()" action="">
					          <b id="fcolor2"> <center>ADD FOOD ITEMS  </b> <br/><br/>
					         <table>
						       <tr> 
									<td id="fcolor">Food name* &nbsp;&nbsp;
									 <input type="text" name="foodname" rows="3"><br/><br/> </td>
								</tr>
							
								<tr>
								     <td id="fcolor">Special Note* 
									  <textarea rows="4" cols="16" name="Spe" > </textarea> <br/><br/></td>
								</tr>	
								
								<tr> 
								      <td id="fcolor"> Quantity*  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									  <input type="text" name="Quantity" ><br/><br/><br/> </td>
								</tr>

								
									
								<tr style="float:right">
								      <td ><input type="reset" value="RESET" id="buttoncolor">&nbsp;&nbsp;&nbsp;
									    <input type="submit"  value="SUBMIT" name="SUBMIT" id="buttoncolor"> </td>
								</tr>	  
										
								
				        </table>
					  </form>	
                           					  
					             
				     </div>
					        <div class="fimg">
				                <img src="photos/homeimg1.jpg" width="560px" border="2px">
							</div>	
							
							<div class="textbox"> 
							     <b style="color:#CFB53B"> Testimonials </b>
								 <p> “I really wanted to convey to you what a wonderful
								      experience I had because of your delightful staff of
									  associates. The people I mentioned provided outstanding 
									  service and I have to believe that everyone else behaves
									  in the same manner. There is nothing that I could offer 
									  to you in terms of improving my experience.It was PERFECT!!
									  My hope is to come back to the AS Catering Service and 
									  I wish the entire staff only the best” - Robeen Ali </p>
							
							</div>
							
							<div class="foot">
							     <b> © 2017 by AS Catering Service. All Rights Reserved </b> <br/>  
							</div>	<br/><br/> 
				
				       
				
				
  					
 
</body>
</html>	
<?php 
      include 'connectasdb.php';
            
			

if(isset($_POST["SUBMIT"]))
		{
			$foodName =$_POST["foodname"];
            $special =$_POST["Spe"];
            $quantity =$_POST["Quantity"];
			
			
			
			if($foodName==""||$special==""||$quantity==""){
				
				header("location:homepageh.php");
				echo '<script type="text/javascript">alert(" you entered is invalid.");</script>';
			}
			
			else{
				 /* if(mysqli_num_rows(mysqli_query($in,"SELECT memberId FROM MEMBER_DETAILS WHERE Email='$Email'" )))
				      {
				        header("location:Register.php");
					     echo "<script type='text/javascript'>alert('YOUR MAIL ALREDY UESD');</script>";
						} */
					$insertString = "INSERT INTO ADDFOOD VALUES('$foodName','$special','$quantity')";

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							   }
				        else{
                            echo '<br/>';
                            echo '1 record added..';
				            
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
                             }
				 
						
			}
			    
  
        }
		
	if(isset($_POST["order9"]))
   {
       $num=$_POST["num9"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
				
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order9'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
                                   $dt = $dt->format('d/m/Y');
								    
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=($prices-$prices*0.1)*$num;
						 
						 
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							
							
				            
                             }
			
			     }			
				   
	   
	      
 }  	
 
else if(isset($_POST["order10"]))
   {
       $num=$_POST["num10"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order10'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
                                   $dt = $dt->format('d/m/Y');
								    
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=($prices-$prices*0.1)*$num;
						 
						 
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							
				            
                             }
			
			     }			
				   
	   
	      
 }  	
 
 else if(isset($_POST["order11"]))
   {
       $num=$_POST["num11"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order11'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
                                   $dt = $dt->format('d/m/Y');
								    
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=($prices-$prices*0.1)*$num;
						 
						 
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							
				            
                             }
			
			     }			
				   
	   
	      
 }  	

 else if(isset($_POST["order12"]))
   {
       $num=$_POST["num12"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order12'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
                                   $dt = $dt->format('d/m/Y');
								    
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=($prices-$prices*0.1)*$num;
						 
						 
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							
				            
                             }
			
			     }			
				   
	   
	      
 }  	









?>  
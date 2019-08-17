<?php
  session_start();
  include 'connectasdb.php';
  
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
						<a  href="logout.php"><b id="fcolor2"> Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b> </a>
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
				<br>          
                <div class="search">
					<form name="search" method="post">
					<table>
						<tr> <td> <input type="text" name="name" placeholder="Search food iteam">
						          <input type="submit" name="submit"  Value=" Search " id="buttoncolor"> </td>
						</tr>
					</table>		
					</form>
                </div>	<br/>
				 
				
	         <div class="menubox"><br/>
			   <table>
			  <form name="menu" method="post" onsubmit="">
			
			  <center id="offertext"><b>  MENU ITEMS </b>  <br>
		
				

              <div class="column1 box2"> 
		         <img src="photos/menu1.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center> Yakitori || Price:1400/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num1" placeholder="enter the quantity"><br><br/></span>
				 <center > <button type="submit" id="orderbutton" name="order1"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu2.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Wyngz || Price:1000/= <br/></b>
				   
               <span id="fcolor2"> Quantity: <input type="text" name="num2" placeholder="enter the quantity"><br><br/></span>
				  <center > <button type="submit" id="orderbutton" name="order2"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu3.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Rollatini || Price:900/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num3" placeholder="enter the quantity"><br><br/></span>
				 <center > <button type="submit" id="orderbutton" name="order3"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu11.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Sanbeiji || Price:2400/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num4" placeholder="enter the quantity"><br><br/></span>
				 <center > <button type="submit" id="orderbutton" name="order4"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu4.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Pastilla || Price:400/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num5" placeholder="enter the quantity"><br><br/></span>
				 <center > <button type="submit" id="orderbutton" name="order5"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu5.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Padak || Price:1550/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num6" placeholder="enter the quantity"><br><br/></span>
				 <center > <button type="submit" id="orderbutton" name="order6"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu6.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Sanbei || Price:1320/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num7" placeholder="enter the quantity"><br><br/></span>
				 <center > <button type="submit" id="orderbutton" name="order7"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   <div class="column1 box2"> 
		         <img src="photos/menu7.jpg" style="width:200px;height:120px"> <br/>
				 <b id="fcolor2"><center>Kedjenou || Price:1600/= <br/></b>
				   <span id="fcolor2"> Quantity: <input type="text" name="num8" placeholder="enter the quantity"><br><br/></span>
				<center > <button type="submit" id="orderbutton" name="order8"   style="width:45px;height:20px;value:order;">order </button>
			   </div> 
			   
			   
			   
			   

			 </form>
			 </table>
			 </div>  
			 
	<?php		
  
  include 'connectasdb.php';
  
  if(isset($_POST["order1"]))
   {
       $num=$_POST["num1"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order1'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
                                   $dt = $dt->format('d/m/Y');
								    
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
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
   
   
   
   else if(isset($_POST["order2"]))
   {
       $num=$_POST["num2"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order2'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								    $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                               echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
	      
           
           
		   
		 

		
		 
		 
		 
   }  
   
   else if(isset($_POST["order3"]))
   {
       $num=$_POST["num3"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order3'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								   $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                              echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
 } 

 else if(isset($_POST["order4"]))
   {
       $num=$_POST["num4"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order4'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								   $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                              echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
 }   
 
 else if(isset($_POST["order5"]))
   {
       $num=$_POST["num5"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order5'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								   $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                              echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
 }   
 
 else if(isset($_POST["order6"]))
   {
       $num=$_POST["num6"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order6'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								   $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                              echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
 }   
 
 else if(isset($_POST["order7"]))
   {
       $num=$_POST["num7"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order7'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								   $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                              echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
 }   
 else if(isset($_POST["order8"]))
   {
       $num=$_POST["num8"];	
       						 	   
       
       if($num==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  quantity invalid.");</script>';
			}
		else
		{
			
			  $sql="SELECT * FROM menu WHERE  MenuNum='order8'";
								   $result=$in->query($sql);
								   $rws=$result->fetch_array();
								   $fname=$rws[1];
								   $prices=$rws[2];
								   $dt = new DateTime();
								   $dt = $dt->format('d/m/Y');
                                   
								   
								  
								   
			            
			             $prices;
						 $num;
						 
						 $total=$prices*$num;
			             
						 
						 
						 $insertString = "INSERT  INTO  order_details VALUES('','$dt','$fname','$prices','$num',' $total')";
                              $_SESSION["ord"]=$num;

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							    
							  
							   }
				        else{
                            echo '<br/>';
                              echo '<br/>';
							echo '<script type="text/javascript">alert(" you must pay.");</script>';
                            echo "<script type='text/javascript'>alert(\"$total\");</script>";
							 echo "<script type='text/javascript'> document.location = 'delivery_optionh.php'; </script>";
							
							 
							
				            
                             }
			
			       
			
		}			
				   
	   
 }   
?>

			 
			    	<div class="foot">
							     <b> © 2017 by AS Catering Service. All Rights Reserved </b> <br/>  
							</div>	<br/><br/> 
				
				       
				
				
  					
 
</body>
</html>	  
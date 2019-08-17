<?php
session_start();
include 'connectasdb.php'; //connect the connection page

?>


<html>
       <head>
	   <link rel="stylesheet" type="text/css" href="AS.css"/>
	   <script type="text/javascript" src="js file/hm.js"> </script>
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
				   <div class="order1">
				     <center id="offertext"> <b > Card Payment Methods <br/><br/><br/><br/><br/><br/> </b>
					 <form name="card_payment" method="post" onsubmit="return cardValidate()">
					    <table id="Rtable">
						 <tr>  
						     <td> Card Number: 
							  <input type="text" name="card_num" id="textbox" placeholder="000000000000"> <br/><br/> </td>
						</tr>
						 
						<tr> 
                              <td> Expriy:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <input type="text" name="expriy" id="textbox" placeholder="mm/yy"> <br/><br/> </td>	
                        </tr>
						
						<tr> 
                              <td> Card Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                               <input type="password" name="c_code" id="textbox" placeholder="***"> <br/><br/> </td>	
                        </tr>
						<tr> 
                              <td> </td>
                              <td> <center> <input type="submit" value="PAY ORDER" id="buttoncolor" > <br/><br/> </td>	
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
 
  if(isset($_POST["PAYORDER"]))
 {	  

           $card_num=$_POST["card_num"];
            $exp =$_POST["expriy"];
            $code =$_POST["c_code"];

         if($card_num==""||$exp==""||$code==""){
				
				
				echo '<script type="text/javascript">alert(" you entered  Data invalid.");</script>';
				header("location:payment_mh.php");
			}
			
			else{
				 /* if(mysqli_num_rows(mysqli_query($in,"SELECT memberId FROM MEMBER_DETAILS WHERE Email='$Email'" )))
				      {
				        header("location:Register.php");
					     echo "<script type='text/javascript'>alert('YOUR MAIL ALREDY UESD');</script>";
						} */
					$insertString = "INSERT INTO card VALUES('$card_num','$exp','$code')";

                        if(!mysqli_query($in,$insertString)){
                               die('Error: '.mysqli_error($in));
							   }
				        else{
                            echo '<br/>';
                             echo '<script type="text/javascript">alert("Your Order confirm ");</script>';
				             header("location:homepageh1.php");
                             }
				 
						
			}
    }


?>
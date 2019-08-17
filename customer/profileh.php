<?php
session_start();
include 'connectasdb.php'; //connect the connection page

?>


<html>
<head>
	 <link rel="stylesheet" type="text/css" href="AS.css">
</head>
<?php
            $email=$_SESSION['email'];
            $sql="SELECT * FROM member_details WHERE Email='$email'";
            $result=  $in->query($sql);
            $rws= $result->fetch_array();

            $fname= $rws[1];
            $lname=$rws[2];
            $email=$rws[3];
			$phone=$rws[4];
           
            ?>

<body>

                <div class="logo"> 
                   				<img src="photos/logo1.jpg" height="140px" width="140px"> 
				</div>
				<div class="name"> 
					<center><b><br/>AS CATERING SERVICE </b>
				</div>

  <center> <div >
     
<img src="photos/profile.png" height="350px" width="200px" >
	 <table>
	 
	        <tr>
			<td><b id="fcolor";> FirstName:</b> <b id="fcolor2"> <?php echo $fname; ?></b> <br/><br/></td>
			</tr>
			<tr>
			<td><b id="fcolor";> lastName:</b> <b id="fcolor2"> <?php echo $lname; ?> </b>  <br/><br/></td>
			</tr>
			<tr>
			<td><b id="fcolor";> Email:</b>   <b id="fcolor2"> <?php echo $email; ?></b>   <br/><br/></td>
			</tr>
			<tr>
			<td><b id="fcolor";> Phone Number:</b> <b id="fcolor2"> <?php echo $phone; ?> </b> <br/><br/></td>
			</tr>
			 <tr>  
			     <td> <input type="submit" name="Edit" value="Edit" onclick="window.location.href='profileEditname.php'"> </td>
				 <td> <input type="submit" name="chnge_ps" value="Change Password" onclick="window.location.href='changePassword.php'" ></td>
				 <td> <input type="submit" name="back" value="<<Back" onclick="window.location.href='homepageh1.php'" >   </td>
			 </tr>	 
	  		
	  </table>							  
								  
                                  			
  
  </div>




</body>
</html>
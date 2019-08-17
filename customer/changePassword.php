<?php
      session_start();
  
  
  ?>

<html>
<head>
    
</head>
<body>

    

    <form action="" method="post">
        <table align="center" class="login_table ">
            <th align="center" colspan="2"> <h2> Change Password <h2> <hr> </th>
            
			
			<tr>
                <td>Enter old password:</td>
                <td><input type="text" name="op" required=""></td>
            </tr>
			
            <tr>
                <td>Enter new password:</td>
                <td><input type="text" name="np" required=""></td>
            </tr>
            <tr>
                <td>Enter password again:</td>
                <td><input type="text" name="ap" required=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="changePW" value="Change Password" >&nbsp;&nbsp;&nbsp;
				<input type="submit" name="cancel" value="cancel" onclick="window.location.href='profileh.php'"></td>
            </tr>
        </table>
    </form>
    <?php
	
	include 'connectasdb.php';
	
    
    if(isset($_POST['changePW'])){
		
		
	    $old=$_POST['op'];
        $new=$_POST['np'];
        $again=$_POST['ap'];
		$mails=$_SESSION["email"];

        if($old==$_SESSION['pass'])
				      {
						 if( $new==$again) 
						  
						  {
							  $updateString = "UPDATE member_details SET password='$new',confirmPassword='$again' WHERE Email ='$mails'";

                              if(!mysqli_query($in,$updateString)){
                                die('Error: '.mysqli_error($in));
                                  }
                               else{
                                   echo '<br/>';
                                    echo '<script type="text/javascript">alert("YOUR PASSWORD CHANGDE");</script>';
				                   header("location:profileh.php");
							        }        
							 }
							 
							else
								 echo '<script type="text/javascript">alert("YOUR NEW PASSWORD AND CONFIRM IS NOT MATCHING  . TRY AGIN");</script>';
								
                      }
				else
				{
					  echo '<script type="text/javascript">alert("YOUR OLD PASSWORD IS INCORRECT . TRY AGIN");</script>';
				}					
    }
    ?>

</body>
</html>
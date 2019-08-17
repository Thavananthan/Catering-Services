<?php
      session_start();
  
  
  ?>

<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
</head>
<body>
<div align="center">
    <form method="post" action="">
        <table>
            <caption><b><h2> PROFILE EDIT.. </h2></b></caption>
            <tr></tr>
            <tr>
                <td>Email </td>
                <td><input type="text" name="email"/>  *YOU CAN'T CHANGE YOUR EMAIL ID..</td>
            </tr>           

		   <tr>
                <td>FirstName</td>
                <td><input type="text" name="fname" /></td>
            </tr>

            <tr>
                <td>LastName</td>
                <td><input type="text" name="lname" /></td>
            </tr>
			
			
			
			<tr>
                <td>phone number </td>
                <td><input type="text" name="pho_num" placeholder="0770000000"/></td>
            </tr>
			
			
		 <tr>
                <td>
                    
                    <input class="btn" type="submit" name="btnUpdate" value="Change">&nbsp;&nbsp;&nbsp;
					<input type="submit" name="cancel" value="cancel" onclick="window.location.href='profileh.php'"></td>
                   
                

                
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<?php
include 'connectasdb.php';
  if(isset($_POST["btnUpdate"])){
	  
	        $mail = $_POST["email"];
            $frname = $_POST["fname"];
			$laname = $_POST["lname"];
            $phone_num = $_POST["pho_num"];
			
            if($mail==$_SESSION["email"])
				      {
				            $updateString = "UPDATE member_details SET firstName='$frname',lastName='$laname',phoneNumber ='$phone_num ' WHERE Email ='$mail'";

                              if(!mysqli_query($in,$updateString)){
                                die('Error: '.mysqli_error($in));
                                  }
                               else{
                                   echo '<br/>';
                                   echo "change";
				                   header("location:profileh.php");
                                   }
                      }
				else
				{
					  echo '<script type="text/javascript">alert("THIS IS NOT YOUR  MAIL . TRY AGIN");</script>';
				}					
  }				  
	
?>	
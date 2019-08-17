 <?php
      
	  include 'connectasdb.php';
	  
	 
    $reg=$_POST["Memberid"];
 
  if(isset($_POST["delete"]))
        {
            $updateString = "DELETE FROM member_details WHERE memberId='$reg'";

            if(!mysqli_query($in,$updateString)){
                die('Error : ' .mysqli_error($in));
            }
            else
            {
               echo '<script type="text/javascript">alert(" delete");</script>';
			    echo "<script type='text/javascript'> document.location = 'memberadmin.php'; </script>";
                
            }
        }
		
		 else if(isset($_POST["btnView"]))
        {
            $updateString = "SELECT * FROM member_details ";

            if(!mysqli_query($in,$updateString)){
                die('Error : ' .mysqli_error($in));
            }
            else
            {
                echo '<br/>';
                echo $updateString;
				
            }
        }
		
		?>
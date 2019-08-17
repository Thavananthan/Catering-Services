 <?php
 include 'connectasdb.php';
 
 if(isset($_POST["delete"]))
        {
			 $regNumber = $_POST["regNo"];
            $updateString = "DELETE FROM card WHERE cardNUM='$regNumber'";

            if(!mysqli_query($in,$updateString)){
                die('Error : ' .mysqli_error($in));
            }
            else
            {
                echo '<br/>';
                
				echo '<script type="text/javascript">alert(" record deleted...");</script>';
				 echo "<script type='text/javascript'> document.location = 'card.php'; </script>";
				
            }
        }
		
		 else if(isset($_POST["btnView"]))
        {
            $updateString = "SELECT * FROM menu ";

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
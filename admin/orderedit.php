<?php
    include 'connectasdb.php';
?>


<?php

 if(isset($_POST["delete"]))
        {
			$OrdNum = $_POST["order"];
            $updateString = "DELETE FROM order_details WHERE orderNum='$OrdNum'";

            if(!mysqli_query($in,$updateString)){
                die('Error : ' .mysqli_error($in));
            }
            else
            {
               
				echo '<script type="text/javascript">alert(" 1 record deleted... ");</script>';
				   
				   echo "<script type='text/javascript'> document.location = 'order.php'; </script>";
            }
        }
		
		 else if(isset($_POST["btnView"]))
        {
            $updateString = "SELECT * FROM order_details";

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
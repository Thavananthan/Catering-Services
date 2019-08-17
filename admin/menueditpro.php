<?php
    include 'connectasdb.php';
?>

<html>
<head>

</head>
<body>
<div align="center">
    <?php
	   
	   
	
        if(isset($_POST["regNo"]) && isset($_POST["fullname"]) && isset($_POST["phone"]))
        {
            $regNumber = $_POST["regNo"];
            $name = $_POST["fullname"];
            $phone_num = $_POST["phone"];
			

        }
        else{
            $error = "error";
            echo $error;
        }

        if(isset($_POST["btnInsert"])){
			
		
			if($regNumber==""||$name==""||$phone_num==""){
				echo "<br/>Error";
				echo '<script type="text/javascript">alert(" invalid data.");</script>';
			}
	        else{
            $insertString = "INSERT INTO menu VALUES('$regNumber', '$name', '$phone_num')";

              if(!mysqli_query($in,$insertString)){
                  //die('Error: '.mysqli_error($in));
				  echo '<script type="text/javascript">alert(" Already use this menu Id");</script>';
				 echo "<script type='text/javascript'> document.location = 'menuedit.php'; </script>";
               }
            else{
                echo '<br/>';
                
				echo '<script type="text/javascript">alert(" record added...");</script>';
				 echo "<script type='text/javascript'> document.location = 'menuedit.php'; </script>";
               }
           }
		} 	

        else if(isset($_POST["btnUpdate"])){

            $updateString = "UPDATE menu SET FoodName= '$name', prices ='$phone_num' WHERE MenuNum='$regNumber'";

            if(!mysqli_query($in,$updateString)){
                die('Error: '.mysqli_error($in));
            }
            else{
                echo '<br/>';
               
				echo '<script type="text/javascript">alert(" record updated...");</script>';
				 echo "<script type='text/javascript'> document.location = 'menuedit.php'; </script>";
				
            }
        }

        else if(isset($_POST["delete"]))
        {
            $updateString = "DELETE FROM menu WHERE MenuNum='$regNumber'";

            if(!mysqli_query($in,$updateString)){
                die('Error : ' .mysqli_error($in));
            }
            else
            {
                echo '<br/>';
                
				echo '<script type="text/javascript">alert(" record deleted...");</script>';
				 echo "<script type='text/javascript'> document.location = 'menuedit.php'; </script>";
				
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
</div>


</body>
</html>
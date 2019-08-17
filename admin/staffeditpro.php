<?php
    include 'connectasdb.php';
?>

<html>
<head>

</head>
<body>
<div align="center">
    <?php
	   
	   
	
        if(isset($_POST["regNo"]) && isset($_POST["fullname"]) && isset($_POST["phone"])&& isset($_POST["age"])&& isset($_POST["address"]))
        {
            $regNumber = $_POST["regNo"];
            $name = $_POST["fullname"];
            $phone_num = $_POST["phone"];
			$age=$_POST["age"];
			$address=$_POST["address"];

        }
        else{
            $error = "error";
            echo $error;
        }

        if(isset($_POST["btnInsert"])){
			
		
			if($regNumber==""||$name==""||$phone_num==""||$age==""||$address==""){
				echo "<br/>Error";
				header("location:adminh.php");
			}
	        else{
            $insertString = "INSERT INTO staff VALUES('$regNumber', '$name', '$phone_num','$age','$address')";

              if(!mysqli_query($in,$insertString)){
                 //die('Error: '.mysqli_error($in));
				   echo '<script type="text/javascript">alert(" already use this staff id ");</script>';
				   
				   echo "<script type='text/javascript'> document.location = 'staffedit.php'; </script>";
               }
            else{
                echo '<br/>';

				 echo '<script type="text/javascript">alert(" 1 record added.. ");</script>';
				   
				   echo "<script type='text/javascript'> document.location = 'staffedit.php'; </script>";
               }
           }
		} 	

        else if(isset($_POST["btnUpdate"])){

            $updateString = "UPDATE staff SET Name = '$name', phone='$phone_num ',Age=$age,Address='$address' WHERE staff_No='$regNumber'";

            if(!mysqli_query($in,$updateString)){
                die('Error: '.mysqli_error($in));
            }
            else{
                echo '<br/>';
                echo '1 record updated...';
            }
        }

        else if(isset($_POST["delete"]))
        {
            $updateString = "DELETE FROM staff WHERE staff_No='$regNumber'";

            if(!mysqli_query($in,$updateString)){
                die('Error : ' .mysqli_error($in));
            }
            else
            {
                
				echo '<script type="text/javascript">alert(" 1 record deleted... ");</script>';
				   
				   echo "<script type='text/javascript'> document.location = 'staffedit.php'; </script>";
            }
        }
		
		 else if(isset($_POST["btnView"]))
        {
            $updateString = "SELECT * FROM staff ";

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
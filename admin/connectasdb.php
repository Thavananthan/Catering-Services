<?php
$mysql_host = "localhost";
    $mysql_user = "root";
    $mysql_pass = "";
	

    $mysql_db = "AS";
	$in=mysqli_connect($mysql_host, $mysql_user, $mysql_pass);
	

    if(!mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !mysqli_select_db($in,$mysql_db)){
        die(mysqli_error($in));
		
		}
    else{
      
    }
?>
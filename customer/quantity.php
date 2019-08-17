<?php
 include 'connectasdb.php';
 ?>

<html>
     <body>    
	 <b> <h2> YOUR ORDER IS... </h2> </b>
	    
		 <?php
		          $num=$_POST["num"];
                    $updateString = "SELECT * FROM menu WHERE MenuNum='order1'";
                    $comments = mysqli_query($in, $updateString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr>
                                <td> <?php echo $row['FoodName']; ?> </td>
                                <td> <?php echo $row['prices']*$num; ?> </td>
                                
                            </tr>
                        <?php
                    }
                        ?>
		
		
		
		
		
		
	 </body>
</html>	 
	 
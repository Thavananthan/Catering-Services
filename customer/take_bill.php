<html>
<head>
 <link rel="stylesheet" type="text/css" href="AS.css"/>
</head>
<body>

<?php
include 'connectasdb.php';
                   
				 
				
					$sq="SELECT  *  FROM order_details WHERE orderNum=(SELECT MAX(orderNum) FROM order_details)";
					$res=$in->query($sq);
					$rws=$res->fetch_array();
					$foodname=$rws[1];
					$date=$rws[2];
					$pri=$rws[3];
					$qty=$rws[4];
					$total=$rws[5];
					
					$sq="SELECT  *  FROM delivery_details WHERE deliveryNum=(SELECT MAX(deliveryNum) FROM delivery_details)";
					$res=$in->query($sq);
					$rws=$res->fetch_array();
					$name=$rws[3];
					$pho=$rws[4];
					$addr=$rws[5];
					
  
 

                  
?>





<center> <h2><b id="fcolor2">     YOUR ORDER DETAILS(BILL) </b> </h2>
	<center><table>
			<tr>
			      <td id="fcolor2">  FOODNAME: <span id="fcolor"> <?php echo $date;?><br> </span></td> 
				  <td id="fcolor2">  DATE: <span id="fcolor">   <?php echo $foodname; ?><br> </span> </td>
		    </tr>
      
	        <tr>
				 <td id="fcolor2"> ONE FOOD PRICE:<span id="fcolor"> <?php echo $pri;?> &nbsp;&nbsp;&nbsp; </span></td>
				  <td id="fcolor2"> QUANTITY: <span id="fcolor"> <?php echo $qty ; ?><br> </span></td>
			</tr>

			<tr>
			     <td id="fcolor2"> TOTAL PRICE: <span id="fcolor"> <?php echo $total; ?></span> <br><br></td>
			</tr>
			
			 <tr> 
                  <td> <input type="button" value=" ADDCARD" onclick="window.location.href='payment_mh.php'" id="buttoncolor"> </td>
				 <td>  <input type="button"  value="<<BACK"	 onclick="window.location.href='deliveryh.php'" id="buttoncolor"> </td>
				 <td><td>  <input type="button"  value="CASH"	 onclick="window.location.href='menuh.php'" id="buttoncolor"></td>
			</tr>	 
		</table>		
			
			
                          
                                
                           
</body>
</html>
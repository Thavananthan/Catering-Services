
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
					$qty=$rws[4];
					$total=$rws[5];
					
					$sq="SELECT  *  FROM delivery_details WHERE deliveryNum=(SELECT MAX(deliveryNum) FROM delivery_details)";
					$res=$in->query($sq);
					$rws=$res->fetch_array();
					$name=$rws[3];
					$pho=$rws[4];
					$addr=$rws[5];
					
  
 

                  
?>





<center> <h2><b id="fcolor">     YOUR ORDER DETAILS(BILL) </b> </h2>
	<center><table>
			<tr>
			      <td id="fcolor">  FOODNAME: <span id="fcolor2"> <?php echo $date;?><br> </span> </td> 
				  <td id="fcolor">  DATE: <span id="fcolor2">    <?php echo $foodname; ?><br> </span> </td>
		    </tr>
      
	        <tr>
				  <td id="fcolor"> QUANTITY: <span id="fcolor2"> <?php echo $qty ; ?><br> </span> </td>
			</tr>

			<tr>
			     <td id="fcolor"> TOTAL PRICE:<span id="fcolor2"> <?php echo $total; ?> <br><br> </span> </td>
			</tr>

			<tr><td><b id="fcolor">YOUR DELIVERY DETAILS </b> <br></td> </tr>
			<tr> 
			    <td id="fcolor"> NAME:  <span id="fcolor2"> <?php echo $name;?><br> </span> </td>
			</tr>
      
            <tr>
                 <td id="fcolor"> PHONE: <span id="fcolor2"> <?php echo $pho;  ?> </span> </td>
                 <td id="fcolor"> ADDRESS:<span id="fcolor2"> <?php echo $addr;?><br> </span> </td>
          
            </tr>
               
			 <tr> 
                  <td> <input type="button" value=" ADDCARD" onclick="window.location.href='payment_mh.php'" id="buttoncolor"> </td>
				 <td>  <input type="button"  value="<<BACK"	 onclick="window.location.href='deliveryh.php'" id="buttoncolor"> </td>
			</tr>	 
		</table>		
			
			
                          
                                
                           
</body>
</html>
<?php
    include 'connectasdb.php';
?>
<html>
<head>
    <title>Comment on library service </title>
    <style type="text/css">
        th,td{
            padding-right: 40px;
            padding-left: 40px;
            height: 40px;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="AS.css">
</head>
<body>
    <div align="center">
        <h2 id="fcolor2">ORDERS DETAILS ON AS COMPANY</h2>
            <table border="1">
                <tr>
                    <th id="fcolor2"> Order Numbers</th>
                    <th id="fcolor2"> Date </th>
                    <th id="fcolor2"> FoodNames</th>
					<th id="fcolor2">Prices </th>
					<th id="fcolor2">Quantity</th>
					<th id="fcolor2">Total prices</th>
					
                </tr>

                <?php
                    $selectString = "SELECT * FROM order_details ";
                    $comments = mysqli_query($in,$selectString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr>
                                <td id="fcolor"> <?php echo $row['orderNum']; ?> </td>
                                <td id="fcolor"> <?php echo $row['date']; ?> </td>
                                <td id="fcolor"> <?php echo $row['foodname']; ?> </td>
								<td id="fcolor"> <?php echo $row['price']; ?> </td>
                                <td id="fcolor"> <?php echo $row['quantity']; ?> </td>
								<td id="fcolor"> <?php echo $row['total_price']; ?> </td>
                            </tr>
                        <?php
                    }
                        ?>

            </table>
			 <input type="button" value="<<BACK" onclick="window.location.href='order.php'" id="buttoncolor">



    </div>
</body>
</html>
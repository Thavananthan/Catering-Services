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
        <h2 id="fcolor2">STAFF DETAILS ON AS COMPANY</h2>
            <table border="1">
                <tr>
                    <th id="fcolor2"> Staff Number</th>
                    <th id="fcolor2"> Staff Name </th>
                    <th id="fcolor2"> Phone</th>
					<th id="fcolor2"> Age</th>
					<th id="fcolor2">Adrress</th>
                </tr>

                <?php
                    $selectString = "SELECT * FROM staff";
                    $comments = mysqli_query($in,$selectString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr>
                                <td id="fcolor"> <?php echo $row['staff_No']; ?> </td>
                                <td id="fcolor"> <?php echo $row['Name']; ?> </td>
                                <td id="fcolor"> <?php echo $row['phone']; ?> </td>
								<td id="fcolor"> <?php echo $row['Age']; ?> </td>
                                <td id="fcolor"> <?php echo $row['Address']; ?> </td>
                            </tr>
                        <?php
                    }
                        ?>
                      
            </table>

                <input type="button" value="<<BACK" onclick="window.location.href='staffedit.php'" id="buttoncolor">

    </div>
</body>
</html>
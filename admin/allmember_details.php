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
        <h2 id="fcolor">MEMBER DETAILS ON AS COMPANY</h2>
            <table border="1">
                <tr>
                    <th id="fcolor"> Member Number</th>
                    <th id="fcolor"> Member firstName </th>
					<th id="fcolor"> Member LastName </th>
					<th id="fcolor"> Email</th>
                    <th id="fcolor"> Phone</th>
					
                </tr>

                <?php
                    $selectString = "SELECT * FROM member_details";
                    $comments = mysqli_query($in,$selectString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr>
                                <td id="fcolor2"> <?php echo $row['memberId']; ?> </td>
                                <td id="fcolor2"> <?php echo $row['firstName']; ?> </td>
                                <td id="fcolor2"> <?php echo $row['lastName']; ?> </td>
								<td id="fcolor2"> <?php echo $row['Email']; ?> </td>
                                <td id="fcolor2"> <?php echo $row['phoneNumber']; ?> </td>
                            </tr>
                        <?php
                    }
                        ?>

            </table>
			<input type="button" value="<<BACK" onclick="window.location.href='memberadmin.php'" id="buttoncolor">



    </div>
</body>
</html>
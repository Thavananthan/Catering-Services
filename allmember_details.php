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
</head>
<body>
    <div align="center">
        <h2>MEMBER DETAILS ON AS COMPANY</h2>
            <table border="1">
                <tr>
                    <th> Member Number</th>
                    <th> Member firstName </th>
					<th> Member LastName </th>
					<th> Email</th>
                    <th> Phone</th>
					
                </tr>

                <?php
                    $selectString = "SELECT * FROM member_details";
                    $comments = mysqli_query($in,$selectString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr>
                                <td> <?php echo $row['memberId']; ?> </td>
                                <td> <?php echo $row['firstName']; ?> </td>
                                <td> <?php echo $row['lastName']; ?> </td>
								<td> <?php echo $row['Email']; ?> </td>
                                <td> <?php echo $row['phoneNumber']; ?> </td>
                            </tr>
                        <?php
                    }
                        ?>

            </table>



    </div>
</body>
</html>
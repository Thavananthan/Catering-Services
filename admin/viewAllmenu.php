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
        <h2 id="fcolor2">MENU DETAILS ON AS COMPANY</h2>
            <table border="1">
                <tr>
                    <th id="fcolor2"> Menu Number</th>
                    <th id="fcolor2"> Food Name </th>
                    <th id="fcolor2"> Prices</th>
					
                </tr>

                <?php
                    $selectString = "SELECT * FROM menu";
                    $comments = mysqli_query($in,$selectString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr id="fcolor">
                                <td> <?php echo $row['MenuNum']; ?> </td>
                                <td> <?php echo $row['FoodName']; ?> </td>
                                <td> <?php echo $row['prices']; ?> </td>
								
                            </tr>
                        <?php
                    }
                        ?>

            </table>

                    <input type="button" value="<<BACK" onclick="window.location.href='menuedit.php'" id="buttoncolor">

    </div>
</body>
</html>
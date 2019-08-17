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
        <h2 id="fcolor2">CARD DETAILS ON AS COMPANY</h2>
            <table border="1">
                <tr id="fcolor2">
                    <th> Card Number</th>
                    <th> Experiy </th>
                    <th> code_num</th>
					
                </tr>

                <?php
                    $selectString = "SELECT * FROM card";
                    $comments = mysqli_query($in,$selectString);

                    while($row = mysqli_fetch_array($comments))
                    {
                         ?>
                            <tr id="fcolor">
                                <td> <?php echo $row['cardNUM']; ?> </td>
                                <td> <?php echo $row['expriy']; ?> </td>
                                <td> <?php echo $row['code_num']; ?> </td>
								
                            </tr>
                        <?php
                    }
                        ?>

            </table>
						<input type="button" value="<<BACK" onclick="window.location.href='card.php'" id="buttoncolor">


    </div>
</body>
</html>
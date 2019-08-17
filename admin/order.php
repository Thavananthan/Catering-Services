<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
	<link rel="stylesheet" type="text/css" href="AS.css">
</head>
<body>
<div align="center">
    <form method="post" action="orderedit.php">
        <table>
            <caption><b><h2 id="fcolor2"> ORDER DETAILS ON AS COMPANY </h2></b></caption>
            <tr></tr>
            <tr>
                <td id="fcolor"> oder Id</td>
                <td><input type="text" name="order" /></td>
            </tr>
			<tr>
			<td>
			 <input class="btn" type="submit" name="delete" id="buttoncolor" value="Delete"/>
             </td>

                <td>
                    <input  type="button" name="btnView" value="View" id="buttoncolor" onclick="window.location.href='viewOrderdetails.php'">
                    <input class="btn" type="reset" name="btnReset" id="buttoncolor" value="Reset"/>
					<input  type="button" name="back" value="<<back"  id="buttoncolor" onclick="window.location.href='adminh.php'">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="AS.css">
</head>
<body>
<div align="center">
    <form method="post" action="staffeditpro.php">
        <table>
            <caption><b><h2 id="fcolor2">STAFF DETAILS ON AS COMPANY </h2></b></caption>
            <tr></tr>
            <tr>
                <td id="fcolor">Staff Id</td>
                <td><input type="text" name="regNo" /></td>
            </tr>

            <tr>
                <td id="fcolor">Name with initials</td>
                <td><input type="text" name="fullname" placeholder="Kamal.P"/></td>
            </tr>
			
			<tr>
                <td id="fcolor">phone number </td>
                <td><input type="text" name="phone" placeholder="0770000000"/></td>
            </tr>
			
			<tr>
                <td id="fcolor">Age </td>
                <td><input type="text" name="age" placeholder="***"/></td>
            </tr>

          
            <tr>
                <td id="fcolor">address :</td>
                <td><textarea name="address" row="5" cols="30"></textarea></td>
            </tr>



            <tr>
                <td>
                    <input class="btn" type="submit" name="btnInsert" id="buttoncolor" value="Insert"/>
                    <input class="btn" type="submit" name="btnUpdate" id="buttoncolor" value="Update"/>
                    <input class="btn" type="submit" name="delete" id="buttoncolor" value="Delete"/>
                </td>

                <td>
                    <input  type="button" name="btnView" value="View" id="buttoncolor" onclick="window.location.href='viewAllstf.php'">
                    <input class="btn" type="reset" name="btnReset"  id="buttoncolor" value="Reset"/>
					<input  type="button" name="back" value="<<back"  id="buttoncolor" onclick="window.location.href='adminh.php'">
                </td>
            </tr>
        </table>
    </form>
</div>


</body>
</html>
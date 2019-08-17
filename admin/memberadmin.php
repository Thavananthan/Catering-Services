<!DOCTYPE html>
<html>
<head>
    
	<link rel="stylesheet" type="text/css" href="AS.css">

    
</head>
<body>
<div align="center">
    <form method="post" action="memberedit.php">
        <table>
            <caption><b><h2 id="fcolor2">MEMBER DETAILS ON AS COMPANY </h2></b></caption>
            <tr></tr>
            <tr>
                <td id="fcolor"> MemberID</td>
                <td><input type="text" name="Memberid" /></td>
            </tr>
			        
            <tr>
			  
			 <td> <input class="btn" type="submit" name="delete" value="Delete" id="buttoncolor"/>
			  <input  type="button" name="btnView" value="View" onclick="window.location.href='allmember_details.php'" id="buttoncolor">
              <input class="btn" type="reset" name="btnReset" value="Reset" id="buttoncolor"/> 
			  <input  type="button" name="back" value="<<back" onclick="window.location.href='adminh.php'" id="buttoncolor"></td>
			
			</tr>
		</table>
	</form>
 </body>
 </html>
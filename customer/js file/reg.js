 
 /*--------------------------------------------------------- Register form validate--------------------*/
    function formValidateReg()
{
	var firstname = document.forms["register"]["fname"].value;
	var pw = document.forms["register"]["password"].value;
	var cpw = document.forms["register"]["confirm_password"].value;
	var lastname = document.forms["register"]["lname"].value;
	var contactNum = document.forms["register"]["pho_num"].value;
	
	var email = document.forms["register"]["email"].value;
	
	
	
	if(validFname(firstname))
		if(validlname(lastname))
		   if(emailValidation(email)) 
	            if(validContactNum(contactNum))
				   if(checkPassword(pw))
		                 if(confirmPassword(cpw))
						 { 
					       
						 return true;}
						else
							return false;
					else
						return false;
				else
					return false;
			else
				return false;
		else
			return false;
	else
		return false;

}

function isEmpty(elemValue,field)
	{
		if(elemValue=="" || elemValue==null)
		{
			alert("Error: You Cannot Have "+ field +" Filed Empty");
			return true;
		}
		else
		{
			
			return false;
		
		}	
	}
	
function validFname(elemValue)
{
	var exp = /^[a-zA-Z]+$/;
		if(!isEmpty(elemValue,"First Name"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please Enter Alphabetical Character for your First name");
				return false;
			}
		}
		else
			return false;
}

function validlname(elemValue)
{
	var exp = /^[a-zA-Z]+$/;
		if(!isEmpty(elemValue,"Last Name"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please Enter Alphabetical Character for your last name");
				return false;
			}
		}
		else
			return false;
}


function checkPassword(elemValue)
{
    if(elemValue != "" || elemValue==null) 
	{
		if(elemValue.length < 8) 
		{
			alert("Error: Password must contain at least eight characters!");
			return false;
		}
		exe = /[0-9]/;
		if(!exe.test(elemValue)) 
		{
			alert("Error: password must contain at least one number (0-9)!");
			return false;
		}
		exe = /[a-z]/;
		if(!exe.test(elemValue)) 
		{
			alert("Error: password must contain at least one lowercase letter (a-z)!");
			return false;
		}
		exe = /[A-Z]/;
		if(!exe.test(elemValue)) 
		{
			alert("Error: password must contain at least one uppercase letter (A-Z)!");      
			return false;
		}
		else
			
			return true;
	}
	else 
	{
		alert("Error: Please check that you've entered and confirmed your password!");
		return false;
	}
}


function confirmPassword(elemValue)
{
	if(elemValue == document.forms["register"]["password"].value ) 
	{
		return true;
	}
	else
	{
		alert("Error: Please check cofirmed password");
		return false;
	}
}




function validContactNum(elemValue)
	{
		if(!isEmpty(elemValue,"Contact Number"))
		{
			var exp = /^[0-9]+$/;
			if(!elemValue.match(exp))
			{
				alert("Error: Contact number must numbers!");
				return false;
			}
			if(elemValue.length < 10 ) 
			{
				alert("Error: Contact Number must 10 numbers");      
				return false;
			}
			if(elemValue.length > 10 ) 
			{
				alert("Error: Contact Number must 10 numbers");      
				return false;
			}
			else
			{
				return true;
			}
		}
		else
			return false;
	}


function emailValidation(elemValue)
	{
		if(!isEmpty(elemValue,"Email"))
		{
			var atops = elemValue.indexOf("@");
			var dotops = elemValue.indexOf(".");
			
			if(atops < 1 ||  dotops + 2 >= elemValue.length || atops +2 > dotops)
			{
				alert(" Enter a valid email address");
				return false;
			}
			else
				return true;
		}
		else
			return false;
	}
   


/*--------------ADD FOOD ITEM-------*/
function AddfoodVaildate()
{
	var fdn= document.forms["addfood"]["foodname"].value;
	var spN= document.forms["addfood"]["Spe"].value;
	var quan= document.forms["addfood"]["Quantity"].value;
	
	if(validFdname(fdn))
		if(validspi(spN))
			if(validqun(quan))
				return true;
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
	
function validFdname(elemValue)
{
	
		if(!isEmpty(elemValue,"Food name"))
		{
		return true;
		}
		else
		{
		 alert("Error: Please Enter Alphabetical Character for your Food name");
		 return false;
		}
		
}	

function validspi(elemValue)
{
	
		if(!isEmpty(elemValue,"Special Instructions"))
		    {
			return true;
			}
			else
			{
				alert("Error: Please Enter your Special Instructions");
				return false;
			}
		
}

function validqun(elemValue)
{
	var exp = /^[0-9]+$/;
		if(!isEmpty(elemValue,"Quantity"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please enter the number only ");
				return false;
			}
		}
		else
			return false;
}


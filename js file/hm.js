function cardValidate()
{
	var Cardm=document.forms["card_payment"]["card_num"].value;
	var datep=document.forms["card_payment"]["expriy"].value;
	var Codep=document.forms["card_payment"]["c_code"].value;
	
	if(cardNumvalidate(Cardm))
		if(datecheck(datep))
			if(codepValidate(Codep))
		           return true;
	        else
		       false;
	    else
	       false;	
	else
	    false;	 
	 
	
	
	
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
	
function cardNumvalidate(elemValue)
{
	var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;  
      if(elemValue.match(cardno))  
            {  
          return true;  
            }  
          else  
            {  
            alert("Not a valid Visa credit card number!");  
            return false;  
            }  
     
}	


function datecheck(elemValue)
{
	
	var exp = /^\d{2}[./-]\d{2}$/;
		if(!isEmpty(elemValue,"expriy"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please Enter for your card expriy date ");
				return false;
			}
		}
		else
			return false;
}

function codepValidate(elemValue)
{  
	var exp = /^[0-9]+$/;
		if(!isEmpty(elemValue," Card code"))
		{
			if(elemValue.match(exp))
			{
				alert("YOUR ORDER CONFIRMED");
				return true;
			
			    if(exp.length>4)
			    {
			      alert("invalid code");
			      return false;
			    }
				else 
					return true;
				
			}	
			else
			{
				alert("Error:  invalid code try agin");
				return false;
			}
		}
		else
			return false;
}
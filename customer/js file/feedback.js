/*------------------------------------FEEDBACK-------------------------------------*/
function feedbackValidate()
 {
	 var namef=document.forms["feedback"]["name"].value;
	 var emailf=document.forms["feedback"]["email"].value;
	 var phonef= document.forms["feedback"]["Pho_num"].value;
    
	 
	 
	 
	 if(namefvalidate(namef))
		 if(emailfvalidate(emailf))
			 if(phonefvalidate(phonef))
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
	
 function namefvalidate(elemValue)
 {
	var exp = /^[a-zA-Z]+$/;
		if(!isEmpty(elemValue,"Name"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please Enter Alphabetical Character for your Name");
				return false;
			}
		}
		else
			return false;
}	
  
  
 function emailfvalidate(elemValue)
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
	
	function phonefvalidate(elemValue)
	{
		if(!isEmpty(elemValue,"Phone Number"))
		{
			var exp = /^[0-9]+$/;
			if(!elemValue.match(exp))
			{
				alert("Error: Phone number must numbers!");
				return false;
			}
			if(elemValue.length < 10 ) 
			{
				alert("Error: Phone Number must 10 numbers");      
				return false;
			}
			if(elemValue.length > 10 ) 
			{
				alert("Error: Phone Number must 10 numbers");      
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
	

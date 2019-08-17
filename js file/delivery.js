/*-----------------------------------DELIVERY-------------------------------*/
function deliveryValidate()
{
	
	
   var DateD=document.forms["delivery"]["date"].value;
   var TimeD=document.forms["delivery"]["time"].value;
   var Fullname=document.forms["delivery"]["fname"].value;
   var phone_num=document.forms["delivery"]["P_num"].value;
   var Address=document.forms["delivery"]["address"].value;
   
   
      
	    if(datevalid(DateD))
			if(fullnameValidate(Fullname))
		             if(validPho_Num(phone_num))
			               if(validadd(Address))
				                return true;
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
	
function datevalid(elemValue)
{
	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
     if(dd<10){
         dd='0'+dd;
          } 
        if(mm<10){
          mm='0'+mm;
           } 
      var today = dd+'/'+mm+'/'+yyyy;
	   if(!isEmpty(elemValue,"DATE"))
		  {
			if(elemValue==today)
			{
				return true;
			}
	        else
			{
				alert("Error: Please enter valid date" );
				return false;
			}
		  }
	
}



function fullnameValidate(elemValue)
{
	var exp = /^[a-zA-Z]+$/;
		if(!isEmpty(elemValue,"FullName"))
		{
			if(elemValue.match(exp))
			{
				return true;
			}
			else
			{
				alert("Error: Please Enter Alphabetical Character for your FullName");
				return false;
			}
		}
		else
			return false;
}

function validPho_Num(elemValue)
	{
		if(!isEmpty(elemValue,"Phone Number"))
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
	
	function validadd(elemValue)
{

		if(!isEmpty(elemValue,"Address"))
		    return true;
			
		else
			{
				alert("Error: invalide address");
				return false;
			}
		
}




  
  
  
  



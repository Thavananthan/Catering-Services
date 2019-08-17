function deliveryValidate()
{
	
	
   var DateD=document.forms["Cash"]["date"].value;
   
   
   
    if(datevalid(DateD))
	      return true;
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
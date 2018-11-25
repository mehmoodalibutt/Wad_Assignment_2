function formvalidatefunc()                                    
{ 
    var Fname = document.forms["RegForm"]["Fname"];               
    var Lname = document.forms["RegForm"]["Lname"];    
    var email = document.forms["RegForm"]["Email"];
    var Comment = document.forms["RegForm"]["comment"];   
    
	
    if (Fname.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    }
    if (Lname.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    }  
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
    
	//Other way to validate the email address

	if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    }
	
	if (!validateEmail(email.value))                                  
    { 
        window.alert("Please enter valid email."); 
        email.focus(); 
        return false; 
    }

    if (comment.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    }
   
    return true; 
}


function validateEmail(email) 
{
    var re = /\S+@\S+/;
    return re.test(email);
}
	
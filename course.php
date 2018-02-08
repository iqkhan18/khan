<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>       
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
			
                <div class = "form_group">    
                    <label>Course name:</label>    
                    <input type = "text" name = "c_name" value = "" required/>    
                </div>    
              
                <div class = "form_group">    
                    <label>Credit hr:</label>    
                    <input type = "text" name = "credit_hr" value = "" required/>  
                </div> 
				
				<div class = "form_group">       
                    <input type = "submit" name = "submit" value = "submit" required/>    
                </div> 
            </div>    
        </form>    
    </body>    
</html>
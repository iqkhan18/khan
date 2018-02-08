<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>       
        <h2>Sign Up</h2>    
        <form name = "form1" action="modified.php" method = "post" enctype = "multipart/form-data" >    
            <div class = "container">    
                <div class = "form_group">    
                    <label>Student name:</label>    
                    <input type = "text" name = "s_name" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Age:</label>    
                    <input type = "text" name = "age" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Address:</label>    
                    <input type = "text" name = "address" value = "" required/>  
                </div>   
				<div class = "form_group">       
                    <input type = "submit" name = "submit" value = "submit">    
                </div> 
            </div>    
        </form>    
    </body>    
</html>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
       
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="public_html/css/login.css">
          <script type="text/javascript" src="js/login.js"></script>  
          
               
             
    </head>
    <body>

        <div class="container">
            <div class="main">
                <h2 style="text-align: center; "><?php echo @$_GET['not_admin']; ?></h2>
                <h1 class="admin">Admin Login</h1>
                    <form  method="post">
                        <label>User Name :</label>
                        <input type="text" name="email" id="email" required="required"/>
                        <label>Password :</label>
                        <input type="password" name="password" id="password" required="required"/>
                        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
                    </form>

            </div>
        </div>

      
    
         
               
    </body>
</html>


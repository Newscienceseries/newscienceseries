<?php
include 'includes/db.php';

session_start();


/*console.log("Trimmed IP: " + trimIP(get_ip_address()) );
console.log("Session trimmed IP:" + $_SESSION['ip_address']);
$_SESSION['logged_in'] = false;*/
?>

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
         <!-- <script type="text/javascript" src="js/login.js"></script>  -->
          
               
             
    </head>
    <body>

        
        <div class="container">
            <div class="main">
                <h2 style="text-align: center; "><?php echo @$_GET['not_admin']; ?></h2>
                 <h2 style="text-align: center; "><?php echo @$_GET['logged_out']; ?></h2>
                <h1 class="admin">Admin Login</h1>
                    <form  method="post" action="login.php">
                        
                        <input type="text" name="email" Placeholder="Email" required="required"/>
                        
                        <input type="password" name="password" Placeholder="Password" required="required"/>
                        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
                    </form>

            </div>
        </div>

      
    
         
               
    </body>
</html>
<?php 


if(isset($_POST['login'])  ){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $sel_user = "SELECT * FROM admins WHERE user_email='$email' AND user_password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    
    if($check_user==1){
        $_SESSION['user_email'] = $email;
        $_SESSION['logged_in'] = true;
        echo "<script>window.open('admin.php?logged_in=You have successfully logged in!','_self')</script>";
    
        
    } else{
            echo "<script>alert('Email or Password is wrong, try again!')</script>";
    }
}

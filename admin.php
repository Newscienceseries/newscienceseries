<?php
include 'includes/db.php';
session_start();
if(!isset($_SESSION['user_email'])){
    echo "<script>window.open('login.php?not_admin=You are not admin','_self')</script>";
}
else{
    

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="public_html/css/login.css" type="text/css" />
    </head>
    <body>
        
        <div class="main_wrapper">
            <div id="right">
            <a href="admin.php?insert_journal">Insert Journal</a>
            <a href="admin.php?view_journal">View Journal</a>
            
        </div>
            <div id="left">
                <?php 
                if(isset($_GET['insert_journal'])){
                include 'admin_panel.php';
                }
                 if(isset($_GET['view_journal'])){
                include 'admin_view.php';
                }
                  if(isset($_GET['edit_jour'])){
                include 'edit_journal.php';
                }
                
                ?>
            </div>
        </div>
    </body>
</html>
<?php } ?>

<?php
require 'includes/db.php';
include 'includes/db.php';
session_start();
if(!isset($_SESSION['user_email'])){
    echo "<script>window.open('login.php?not_admin=You are not admin','_self')</script>";
}
else{
?>

<html>

    <head>
        <title>Add New Record in MySQL Database</title>
    </head>

    <body>
      


        <form action="" method="post" enctype="multipart/form-data">
            <table align="center" width="750" border="2" bgcolor="orange">
                <tr align="center">
                    <td colspan="7"><h2>Insert New Journal Here </h2></td>

                </tr>

                <tr>
                    <td align="right"><b>Journal Title:</b></td>
                    <td><input type="text" name="journal_title" size="50" required/></td>
                </tr>
                <tr>
                    <td align="right"><b>Journal Link:</b></td>
                    <td><input type="text" name="journal_link" size="50" required/></td>
                </tr>
                <tr>
                    <td align="right"><b>Journal Image:</b></td>
                    <td><input type="file" name="journal_image"/></td>
                </tr>
                <tr align="center">

                    <td colspan="7"><input type="submit" name="save" value="Insert"/></td>
                </tr>
            </table>
        </form>
        


    </body>

</html>


<?php
    if(isset($_POST['save'])){
               
        $journal_title = $_POST['journal_title'];
        $journal_link = $_POST['journal_link']; 
        $journal_image = $_FILES['journal_image']['name']; 
        $journal_image_tmp = $_FILES['journal_image']['tmp_name'];
        
        move_uploaded_file($journal_image_tmp, "journal_images/$journal_image");
        
        $insert_journal = "INSERT INTO journals(journal_title, journal_link, journal_image) "
                . "values ('$journal_title','$journal_link','$journal_image');"; 
       
        
        $insert_jour = mysqli_query($con, $insert_journal);
        if($insert_jour){
            echo "<script>alert('Journal has been inserted!');</script>";
            echo "<script>window.open('admin.php?view_journal','_self');</script>";
         }
        
    }

  ?>
<?php }


<?php
require 'includes/db.php';


if(isset($_GET['edit_jour'])){
    $get_id = $_GET['edit_jour'];
    
      $get_jour = "SELECT * FROM journals WHERE journal_id='$get_id'";
            $run_jour = mysqli_query($con, $get_jour);
            
            $i = 0;
            $row_jour = mysqli_fetch_array($run_jour);
                $journal_id = $row_jour['journal_id'];
                $journal_title = $row_jour['journal_title'];
                $journal_link = $row_jour['journal_link'];
                $journal_image = $row_jour['journal_image'];
}
?>

<html>

    <head>
        <title>Update Journal</title>
    </head>

    <body>
      


        <form action="" method="post" enctype="multipart/form-data">
            <table align="center" width="750" border="2" bgcolor="orange">
                <tr align="center">
                    <td colspan="7"><h2>Update Journal Here </h2></td>

                </tr>

                <tr>
                    <td align="right"><b>Journal Title:</b></td>
                    <td><input type="text" name="journal_title" size="50" value="<?php echo $journal_title; ?>"/></td>
                </tr>
                <tr>
                    <td align="right"><b>Journal Link:</b></td>
                    <td><input type="text" name="journal_link" size="50" value="<?php echo $journal_link; ?>"/></td>
                </tr>
                <tr>
                    <td align="right"><b>Journal Image:</b></td>
                    <td><input type="file" name="journal_image"/><img src="journal_images/<?php echo $journal_image; ?>" width="60" height="60" /></td>
                </tr>
                <tr align="center">

                    <td colspan="7"><input type="submit" name="update_journal" value="Upfate Journal"/></td>
                </tr>
            </table>
        </form>
        


    </body>

</html>


<?php
    if(isset($_POST['update_journal'])){
        $update_id = $journal_id;       
        $journal_title = $_POST['journal_title'];
        $journal_link = $_POST['journal_link']; 
        $journal_image = $_FILES['journal_image']['name']; 
        $journal_image_tmp = $_FILES['journal_image']['tmp_name'];
        
        move_uploaded_file($journal_image_tmp, "journal_images/$journal_image");
        
        $update_journal = "update journals set journal_title='$journal_title', journal_link='$journal_link', journal_image='$journal_image' where journal_id='$update_id'"; 
       
        
        $run_journal = mysqli_query($con, $update_journal);
        if($run_journal){
            echo "<script>alert('Journal has been updated!');</script>";
            echo "<script>window.open('admin.php?view_journal','_self');</script>";
         }
        
    }

  ?>

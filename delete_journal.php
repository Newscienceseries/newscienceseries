<?php

include 'includes/db.php';


if(isset($_GET['delete_jour'])){
    $delete_id = $_GET['delete_jour'];
    
      $delete_jour = "DELETE FROM journals WHERE journal_id='$delete_id'";
            $run_delete = mysqli_query($con, $delete_jour);
            
            if($run_delete){
                echo "<script>alert ('A journal has been deleted!')</script>";
                echo "<script>window.open('admin.php?view_journal','_self');</script>";
            }
}
?>

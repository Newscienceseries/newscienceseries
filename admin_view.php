<?php
include 'includes/db.php';
session_start();
if(!isset($_SESSION['user_email'])){
    echo "<script>window.open('login.php?not_admin=You are not admin','_self')</script>";
}
else{
    ?>
}
        <table width="795" align="center" bgcolor="pink">
            
            <tr align="center">
                <td>
                    <h2>View all journals</h2>
                </td>
            </tr>
            <tr align="center">
                <th>S.N</th>
                <th>Title</th>
                <th>Link</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            include 'includes/db.php';
           
            $get_jour = "SELECT * FROM journals";
            $run_jour = mysqli_query($con, $get_jour);
            
            $i = 0;
            while ($row_jour = mysqli_fetch_array($run_jour)) {
                $journal_id = $row_jour['journal_id'];
                $journal_title = $row_jour['journal_title'];
                $journal_link = $row_jour['journal_link'];
                $journal_image = $row_jour['journal_image'];
                $i++;


            
            ?>
              <tr align="center">
                <td><?php echo $i;?></td>
                <td><?php echo $journal_title;?></td>
                <td><?php echo $journal_link;?></td>
                <td><img src="journal_images/<?php echo $journal_image;?>" width="60" height="60" /></td>
                <td><a href="admin.php?edit_jour=<?php echo $journal_id; ?>">Edit</a></td>
                <td><a href="delete_journal.php?delete_jour=<?php echo $journal_id ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        
<?php }
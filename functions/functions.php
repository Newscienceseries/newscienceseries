
<?php
   $con = mysqli_connect("localhost", "root", "root", "newscienceseries");
   
   
   function getJour(){
       global $con;
       $get_jour = "SELECT * FROM journals";
       $run_jour = mysqli_query($con, $get_jour);
       while($row_jour= mysqli_fetch_array($run_jour)){
           
          $journal_id = $row_jour['journal_id'];
          $journal_title = $row_jour['journal_title'];
          $journal_link = $row_jour['journal_link'];
          $journal_image = $row_jour['journal_image'];
          
          echo "<a target='_blank' href='http://" . $row_jour['journal_link']. "'><img class ='img-journal' src='journal_images/$journal_image' width='180' height='180' />"
                  . "<h3>$journal_title</h3>"
                  
                  . "</a>  "
          
          
          
               ;
           
       }
       
       
   }

<!DOCTYPE html>
<?php include 'functions/functions.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Journals</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public_html/css/style.css" type="text/css"/>
                 <script type="text/javascript">
            $(document).ready(function() {
    $('#files').load('adminPanel.html #selectedFiles');
});
</script>
    </head>
    <body>
        
        <h1> test </h1>
           <div class = "journals">
               <ul class = "journals-list">
                   <li class = "journal-block">
                 
                        <?php getJour(); ?> 
                    
                     <span class ="journal-text ">
                       Economics and Management 
                      </span>
                   </li>
                   
               </ul>
           </div>
    </body>
</html>

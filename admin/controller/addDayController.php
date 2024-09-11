<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $dayname = $_POST['day_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO dayitv
         (dayitv_name) 
         VALUES ('$dayname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?dayitv=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?dayitv=success");
         }
     
    }
        
?>
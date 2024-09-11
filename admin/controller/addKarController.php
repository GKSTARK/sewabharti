<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $karname = $_POST['kar_name'];
       
         $insert = mysqli_query($conn,"INSERT INTO karyakarini
         (karyakarini_name) 
         VALUES ('$karname')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?karyakarini=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?karyakarini=success");
         }
     
    }
        
?>
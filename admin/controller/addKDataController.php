<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $kname = $_POST['kname'];
        $karyakarini = $_POST['karyakarini'];
        $dayitv= $_POST['dayitv'];
        $mobile = $_POST['mobile'];

         $insert = mysqli_query($conn,"INSERT INTO karyakarini_data
         (name,karyakarini_id,dayitv_id,mobile) VALUES ('$kname','$karyakarini','$dayitv','$mobile')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?kdata=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php#karyakarini_data?kdata=success");
         }
     
    }
        
?>
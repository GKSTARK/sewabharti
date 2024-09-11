<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM karyakarini_data where karyakarini_data_id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Karyakarini Details Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
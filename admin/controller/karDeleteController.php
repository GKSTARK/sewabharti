<?php

    include_once "../config/dbconnect.php";
    
    $kar_id=$_POST['record'];
    $query="DELETE FROM karyakarini where karyakarini_id='$kar_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Karyakarini Position Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
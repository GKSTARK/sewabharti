<?php

    include_once "../config/dbconnect.php";
    
    $day_id=$_POST['record'];
    $query="DELETE FROM dayitv where dayitv_id='$day_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Dayitv Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
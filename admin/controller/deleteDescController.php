<?php

    include_once "../config/dbconnect.php";
    
    $p_id=$_POST['record'];
    $query="DELETE FROM descp where desc_id='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Description Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>
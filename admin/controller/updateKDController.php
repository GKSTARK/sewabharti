<?php
    include_once "../config/dbconnect.php";

    $kd_id=$_POST['kd_id'];
    $karyakarini= $_POST['karyakarini'];
    $dayitv= $_POST['dayitv'];
    $kname= $_POST['kname'];
    $mobile= $_POST['mobile'];
   
    $updateItem = mysqli_query($conn,"UPDATE karyakarini_data SET 
        karyakarini_id=$karyakarini, 
        dayitv_id=$dayitv,
        name='$kname',
        mobile=$mobile 
        WHERE karyakarini_data_id=$kd_id");


    if($updateItem)
    {
        echo "true";
    }
?>
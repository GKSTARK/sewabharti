<?php
    include_once "../config/dbconnect.php";

    $desc_id=$_POST['desc_id'];
    $desc_info= $_POST['desc_info'];
    $category= $_POST['category'];

    if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE descp SET 
        desc_info='$desc_info', 
        category_id=$category,
        desc_image='$final_image' 
        WHERE desc_id=$desc_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>
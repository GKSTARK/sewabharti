<div class="container p-5">

<h4>Edit Karyakarini Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * from karyakarini_data Where karyakarini_data_id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $kID=$row1["karyakarini_id"];
      $dID=$row1["dayitv_id"]
?>
<form id="update-Items" onsubmit="updateKD()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="kd_id" value="<?=$row1['karyakarini_data_id']?>" hidden>
    </div>
    <div class="form-group">
        <label>Karyakarini Options:</label>
        <select id="karyakarini" >
        <?php

        $sql="SELECT * from karyakarini where karyakarini_id=$kID";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0){
        while($row = $result-> fetch_assoc()){
            echo"<option selected value='".$row['karyakarini_id']."'>".$row['karyakarini_name'] ."</option>";
        }
        }
        ?>
        <?php

            $sql="SELECT * from karyakarini where karyakarini_id!=$kID";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option value='".$row['karyakarini_id']."'>".$row['karyakarini_name'] ."</option>";
            }
            }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label>Dayitv:</label>
        <select id="dayitv" >
        <?php

            $sql="SELECT * from dayitv where dayitv_id=$dID";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option selected value='".$row['dayitv_id']."'>".$row['dayitv_name'] ."</option>";
            }
            }
        ?>
        <?php

            $sql="SELECT * from dayitv where dayitv_id!=$dID";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
                echo"<option value='".$row['dayitv_id']."'>".$row['dayitv_name'] ."</option>";
            }
            }
        ?>
        </select>
    </div>
    <div class="form-group">
        <label for="kname">Name:</label>
        <input type="text" class="form-control" id="kname" value="<?=$row1['name']?>"  required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="number" class="form-control" id="mobile" value="<?=$row1['mobile']?>"  required>
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Details</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

  
</div>
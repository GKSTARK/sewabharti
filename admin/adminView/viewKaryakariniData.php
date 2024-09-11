<div style="overflow-y: auto; max-height: 550px;">
  <h2>Karyakarini Data</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.No.</th>
        <th class="text-center">Name</th>
        <th class="text-center">Karyakarini</th>
        <th class="text-center">Dayitv</th>
        <th class="text-center">Mobile</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from karyakarini_data kd, karyakarini k, dayitv d WHERE k.karyakarini_id=kd.karyakarini_id AND kd.dayitv_id=d.dayitv_id ";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["karyakarini_name"]?></td>
      <td><?=$row["dayitv_name"]?></td>      
      <td><?=$row["mobile"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="kdEditForm('<?=$row['karyakarini_data_id']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="kdDelete('<?=$row['karyakarini_data_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
</div>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Karyakarini Details
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Karyakarini Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addKDataController.php" method="POST">
            
            <div class="form-group">
              <label>Karyakarini:</label>
              <select name="karyakarini" >
                <option disabled selected>Select Karyakarini</option>
                <?php

                  $sql="SELECT * from karyakarini";
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
              <select name="dayitv" >
                <option disabled selected>Select Dayitv</option>
                <?php

                  $sql="SELECT * from dayitv";
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
              <input type="text" class="form-control" name="kname" required>
            </div>
            <div class="form-group">
              <label for="mobile">Mobile No.:</label>
              <input type="number" class="form-control" name="mobile" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Details</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  

   
<?php
include 'header.php';
$query="SELECT * FROM teacher";
$q=mysqli_query($con,$query);
?>



  <div class="content-wrapper">
<form action="submitassignmentdb.php?" method="POST" enctype="multipart/form-data">
    <h3>Assignment</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Assignment Details</h3>
              </div>
              <div class="card-body">
               


                
<div class="form-group">
                  <label>Teacher</label>
                  <select class="form-control select2" style="width: 100%;" name="teacher">
                    <option selected="selected">Select Teacher</option>
 <?php
while($row=mysqli_fetch_array($q)){
 ?>
                    <option value="<?php echo $row['t_id']?>"><?php echo $row['t_name']?></option>
                   <?php
}
                   ?>

            </select>
                </div>

                
                <div class="form-group">
                  <label>Code Assignment</label>
                  <select class="form-control select2" style="width: 100%;" name="code">
                    <option selected="selected">Select Code</option>
 <?php
 $query1="SELECT * FROM assignment";
 $q1=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($q1)){
 ?>
                    <option value="<?php echo $row1['a_id']?>"><?php echo $row1['a_code']?></option>
                   <?php
}
                   ?>

            </select>
                </div>

                  
                     <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>


                  
</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>

</div>

</body>
</html>

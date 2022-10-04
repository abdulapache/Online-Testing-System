<?php
include 'dbconnect.php';
include 'header.php';
include 'footer.php';
$query="SELECT * FROM student WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
?>

  <div class="content-wrapper">
<form action="addassignmentdb.php?" method="POST" enctype="multipart/form-data">
    <h3>Assignment</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Assignment Details</h3>
              </div>
              
               <div class="form-group">
                    <label for="exampleInputPassword1">Assignment Code</label>
                    <input type="Text" name="code" class="form-control" id="exampleInputPassword1" placeholder="Enter Test Code">
                  </div>


                <div class="card-body">
<div class="form-group">
                  <label>Student</label>
                  <select class="form-control select2" style="width: 100%;" name="student">
                    <option selected="selected">Select Student</option>
                    <?php
while($row=mysqli_fetch_array($q)){

?>
                    <option value="<?php echo $row['s_id']?>"><?php echo $row['s_name']?></option>
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


                   <div class="form-group">
                    <label for="exampleInputPassword1">Remarks</label>
                    <input type="Text" name="remarks" class="form-control" id="exampleInputPassword1" placeholder="Enter Test Code">
                  </div>
                  
</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>

</div>

</body>
</html>

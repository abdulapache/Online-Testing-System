<?php
include 'dbconnect.php';
include 'header.php';
include 'footer.php';
$query="SELECT * FROM student WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
?>

  <div class="content-wrapper">
<form action="marksdb.php?" method="POST" enctype="multipart/form-data">
    <h3>Student</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Marks</h3>
              </div>
              
               <div class="form-group">
                    <label for="exampleInputPassword1">Test Code</label>
                    <input type="Text" name="test" class="form-control" id="exampleInputPassword1" placeholder="Enter Test Code">
                  </div>


                <div class="card-body">
<div class="form-group">
                  <label>Marks</label>
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
                    <label for="exampleInputPassword1">English</label>
                    <input type="number" name="english" class="form-control" id="exampleInputPassword1" placeholder="Enter english number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Calculas</label>
                    <input type="number" name="calculas" class="form-control" id="exampleInputPassword1" placeholder="Enter calculas number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">C++</label>
                    <input type="number" name="c++" class="form-control" id="exampleInputPassword1" placeholder="Enter C++ number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Database</label>
                    <input type="number" name="database" class="form-control" id="exampleInputPassword1" placeholder="Enter database number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Physics</label>
                    <input type="number" name="physics" class="form-control" id="exampleInputPassword1" placeholder="Enter physics number">
                  </div>
                  
</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>

</div>

</body>
</html>

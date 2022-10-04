<?php
include 'dbconnect.php';
include 'header.php';
include 'footer.php';
$query="SELECT * FROM teacher";
$q=mysqli_query($con,$query);
?>




  
  <div class="content-wrapper">
<form action="studentdb.php" method="POST" enctype="multipart/form-data">
    <h3>Student</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Student Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter student name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Fname</label>
                    <input type="text" name="fname" class="form-control" id="exampleInputPassword1" placeholder="Enter student fname">
                  </div>
                  
                    <div class="form-group">
                    <label for="exampleInputPassword1">Course</label>
                    <input type="text" name="course" class="form-control" id="exampleInputPassword1" placeholder="Enter sudent course">
                  </div>
                  

<div class="form-group">
                  <label>Teacher</label>
                  <select class="form-control select2" style="width: 100%;" name="teacher">
                    <option selected="selected">Teacher</option>
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
                    <label for="exampleInputPassword1">F.CNIC</label>
                    <input type="cnic" name="cnic" class="form-control" id="exampleInputPassword1" placeholder="Enter sudent father cnic">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter student phone number">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter student username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter student password">
                  </div>
                  
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter student address">
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
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

</div>

</body>
</html>

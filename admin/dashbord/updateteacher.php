<?php
include 'header.php';
include 'footer.php';
include 'dbconnect.php';
$id=$_GET['r'];
$query="SELECT * FROM teacher WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
?>

  <div class="content-wrapper">
<form class="post-form" action="updateteacherdb.php?r=<?php echo $id?>" method="post">
    <h3>Teachers</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Teacher Update Record</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $row['t_name']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter teacher name">
                  </div>
                  <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" name="qualification" value="<?php echo $row['t_qualification']?>" class="form-control"  placeholder="Enter teacher qualification">
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" name="phone" value="<?php echo $row['t_phone']?>" class="form-control"  placeholder="Enter teacher name">
                  </div>
                    <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" value="<?php echo $row['t_subject']?>" class="form-control" placeholder="Enter teacher subject">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input type="email" name="username" value="<?php echo $row['t_username']?>" class="form-control" placeholder="Enter teacher username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $row['t_password']?>" class="form-control" placeholder="Enter teacher password">
                  </div>
                  
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" value="<?php echo $row['t_address']?>" class="form-control" placeholder="Enter teacher address">
                  </div>
                

                     <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    
                      <div class="custom-file">
                        <input type="file" name="file" value="<?php echo $row['t_pic']?>" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">select</label>
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
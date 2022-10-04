<?php
include 'header.php';
include 'footer.php';
?>
  
  <div class="content-wrapper">

    <h3>Teachers</h3>
    
    
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Teacher Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="teacherdb.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter teacher name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qualification</label>
                    <input type="text" name="qualification" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher qualification">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="number" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter teacher name">
                  </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Subject</label>
                    <input type="text" name="subject" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher subject">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter teacher username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher password">
                  </div>
                  
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter teacher address">
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
                  
                 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

</div>

</body>
</html>

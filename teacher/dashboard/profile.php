<?php
include 'header.php';
include 'footer.php';
include 'dbconnect.php';
?>
<style>
	.form-ar{
		margin-left: 270px;
	}
	button{
		width: 150px;
	}
</style>
<div class="content-wrapper">
	                          <form action="updateprofiledb.php?r=<?php echo $id?>" method="post">
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
                    <input type="email" name="username" value="<?php echo $row['t_username']?>" class="form-control" placeholder="Enter teacher username" disabled >
                  </div>
                  <div class="form-group" onclick="myFunction()">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $row['t_password']?>" class="form-control" placeholder="Enter teacher password" id="myinput">
                  </div>
                  
               
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" name="address" value="<?php echo $row['t_address']?>" class="form-control" placeholder="Enter teacher address">
                  </div>
                

                     <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    
                      <div class="custom-file">
                        <input type="file" name="file" value="<?php echo $row['t_pic']?>" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile"><?php echo $row['t_pic']?></label>
                      </div>
                  </div>

                  <div class="form-ar">
                  	<button type="submit">

                  Save</button>
                  	
                  </div>

</div>
</form>

</div>



	</div>
     

</body>
</html>

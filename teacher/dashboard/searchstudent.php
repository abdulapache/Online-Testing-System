<?php
include 'header.php';

$search=$_POST['search'];
$query="SELECT * FROM student WHERE s_name LIKE '".$search."%' AND t_id='".$id."'";
$q=mysqli_query($con,$query);
?>
 
  <div class="content-wrapper">

    <h3>Student</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="studentadd.php">+Add Student</a></font></td>
        </a>
      </tr>
    </table>

    
          <table border=2 bordercolor=green align=center width=800>
            <form class="form-inline ml-3" action="searchstudent.php" method="POST">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" name="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
            <tr align=center>
              <th>Name</th>
              <th>F.Name</th>
              <th>Phone</th>
              <th>Course</th>
              <th>CNIC</th>
              <th>Username</th>
              <th>Password</th>
              <th>Address</th>
              <th>Pic</th>
              <th>Edit</th>
              <th>Update</th>
            </tr>
            <?php
        if(!$q){
?>
<tbody>
<tr><td>not</td></tr>
</tbody>
          

            <?php
}else{


            
            while($row=mysqli_fetch_array($q)){
              
            ?>

            <tr align=center>
              <td><?php echo $row['s_name']?></td>
              <td><?php echo $row['s_fname']?></td>
              <td><?php echo $row['s_phone']?></td>
              <td><?php echo $row['s_course']?></td>
              <td><?php echo $row['s_fcnic']?></td>
              <td><?php echo $row['s_username']?></td>
              <td><?php echo $row['s_password']?></td>
              <td><?php echo $row['s_address']?></td>
              <td>
               <img src="../../admin/dashbord/upload/<?php echo $row['s_pic']?>" width=30>
              </td>
              <td>
                
                <button>
                <a href='dbdelete.php?r=<?php echo $row['s_id']?>'>Delete</a>
                </button></td>
                <td>
                
                <button>
                  <a href='update.php?r=<?php echo $row['s_id']?>'>Edit</a>
               </button> 
               </td>
            </tr>





      
            <?php
}}
            ?>
          </table>

</div>


           
      
</form>
</body>
</html>

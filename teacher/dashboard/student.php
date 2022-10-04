<?php
include 'header.php';
include 'footer.php';
include 'dbconnect.php';
?>
<div class="content-wrapper">

    <h3>Student</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="studentadd.php">+Add Student</a></font></td>
        </a>
      </tr>
    </table>
    
          <table border=2 bordercolor=green align=center width=900>
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
              <th>Fname</th>
              <th>Phone</th>
              <th>Course</th>
              <th>F.CNIC</th>
              <th>Username</th>
              <th>Password</th>
              <th>Address</th>
              <th>Pic</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

<?php
$query="SELECT * FROM student WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
while($row=mysqli_fetch_array($q)){


?>
<tr>
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
<a href="studentedit.php?r=<?php echo $row['s_id']?>">
  Edit
</a></td>
  <td>
<a href="studentdelete.php?r=<?php echo $row['s_id']?>"  onclick="confirm('are you sure')">
  Delete
</a></td>
</tr>
<tbody>
<?php
}
}else{
  echo "<tr>
  <h1>Student Not Found</h1>
</tr>";
?>

<?php
}
?>
  </tbody>

          </table>

</div>

     
</body>
</html>






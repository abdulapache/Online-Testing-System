<?php
include 'header.php';
include 'footer.php';
include 'dbconnect.php';
?>
<div class="content-wrapper">

    <h3>Student</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="addassignment.php">+Add Assignment</a></font></td>
        </a>
      </tr>
    </table>
    
          <table border=2 bordercolor=green align=center width=900>
            <form class="form-inline ml-3" action="searchassignment.php" method="POST">
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
              
              <th>Code</th>
              <th>Student</th>
              <th>Files</th>
              <th>Remarks</th>
            </tr>

<?php
$query="SELECT * FROM assignment WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
while($row=mysqli_fetch_array($q)){
$sid=$row['s_id'];
$query1="SELECT * FROM student WHERE s_id='".$sid."'";
$q1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($q1);
?>
<tr align=center>
  <td><?php echo $row['a_code']?></td>
  <td><?php echo $row1['s_name']?></td>
  


<td>
  <a href="upload/<?php echo $row['a_file']?>">
  <embed src="upload/<?php echo $row['a_file']?>" type='application/pdf' width=50 height=50 >
    </a>
</td>







  <td><?php echo $row['a_remarks']?></td>
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






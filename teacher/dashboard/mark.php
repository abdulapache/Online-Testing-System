<?php
include 'header.php';
include 'footer.php';
include 'dbconnect.php';

?>
<div class="content-wrapper">

    <h3>Student</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="marks.php">+Add Marks</a></font></td>
        </a>
      </tr>
    </table>
    
          <table border=2 bordercolor=green align=center width=900>
            <form class="form-inline ml-3" action="searchmarks.php" method="POST">
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
              <th>Test Code</th>
              <th>Name</th>
              <th>English</th>
              <th>Claculas</th>
              <th>C++</th>
              <th>Database</th>
              <th>Physics</th>
              <th>Obtained Marks</th>
              <th>Total Marks</th>
              <th>persantage</th>
              <th>Grade</th>              
            </tr>

<?php
$query="SELECT * FROM marks WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
while($row=mysqli_fetch_array($q)){
$id=$row['s_id'];
$obtained=$row['m_english']+$row['m_calculas']+$row['m_cplus']+$row['m_database']+$row['m_physics'];
$per=$obtained*100/500;
$query1="SELECT * FROM student WHERE s_id='".$sid."'";
$q1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($q1);
?>
<tr>
  <td><?php echo $row['m_test']?></td>
  <td><?php echo $row1['s_name']?></td>
  <td><?php echo $row['m_english']?></td>
  <td><?php echo $row['m_calculas']?></td>
  <td><?php echo $row['m_cplus']?></td>
  <td><?php echo $row['m_database']?></td>
  <td><?php echo $row['m_physics']?></td>
  <td><?php echo $obtained?></td>
  <td>500</td>
  <td><?php echo $per?></td>
  <?php
  if($per>=90){

  
  ?>
  <td bgcolor=green ><font color=white>A</font></td>
  <?php
}elseif($per>=70){
  
  ?>
  <td bgcolor=yellow>B</td>
  <?php
}elseif($per>=60){
?>
<td bgcolor=blue><font color=white>C</font></td>
<?php
}else{
?>
<td bgcolor=red><font color=white>F</font></td>

<?php
}
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






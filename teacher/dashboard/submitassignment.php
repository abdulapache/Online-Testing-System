<?php
include 'header.php';

?>

<div class="content-wrapper">

    <h3>Student</h3>
    
      
    
    <table width=800 bgcolor=black align=center width=600>
      <tr>
        <td align=center><font size=5 color=white><a href="submitassignment.php">Submit Assignment</a></font></td>
        </a>
      </tr>
    </table>
    
          <table border=2 bordercolor=green align=center width=900>
            
            <tr align=center>
              
              <th>Assignment Code</th>
              <th>Teacher</th>
              <th>Assignment</th>
            
            </tr>
            <?php
$query="SELECT * FROM submit WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
while($row=mysqli_fetch_array($q)){
  $id=$row['s_id'];
$query1="SELECT * FROM student WHERE s_id='".$id."'";
$q1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($q1);

$aid=$row['a_id'];
$query2="SELECT * FROM assignment WHERE a_id='".$aid."'";
$q2=mysqli_query($con,$query2);
$row2=mysqli_fetch_array($q2);
            ?>
            <tr align=center>
            	<td><?php echo $row2['a_code']?></td>
            	<td><?php echo $row1['s_name']?></td>
            	<td>
               <embed src="upload/<?php echo $row['s_file']?>" type='application/pdf' width=50 height=50 />
              </td>
            </tr>


<?php
}
?>
</div>

     
</body>
</html>


<?php
include 'dbconnect.php';
include 'footer.php';
include 'header.php';
$id=$_GET['r'];
echo $query="DELETE FROM student WHERE s_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='student.php'</script>";
}else
{
	echo "<script type='text/javascript'>alert('some problem');window.location.href='student.php'</script>";
}

?>
<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="DELETE FROM teacher WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>alert('success');window.location.href='../index.php'</script>";
}else
{
	echo "<script type='text/javascript'>alert('not success');window.location.href='dashbord.php'</script>";
}
?>
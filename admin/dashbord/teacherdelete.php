<?php
include 'dbconnect.php';
$id=$_GET['r'];
$query="DELETE FROM teacher WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);

if($q){
	echo "<script type='text/javascript'>;
	window.location.href='teacher.php'</script>";

}else{

echo "<script type='text/javascript'>;
	window.location.href='teacher.php'</script>";
}
?>
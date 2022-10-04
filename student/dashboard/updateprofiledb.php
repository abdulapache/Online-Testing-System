<?php
include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$cnic=$_POST['cnic'];
$password=$_POST['password'];
$address=$_POST['address'];
$query="UPDATE student SET s_name='$name',s_fname='$fname',s_phone='$phone',s_course='$course',s_fcnic='$cnic',s_password='$password',s_address='$address' WHERE s_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='profile.php'</script>";
}else{
	echo "<script type='text/javascript'>;window.location.href='profile.php'</script>";
}
?>
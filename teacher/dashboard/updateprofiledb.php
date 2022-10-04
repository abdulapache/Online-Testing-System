<?php
include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$qualification=$_POST['qualification'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$password=$_POST['password'];
$address=$_POST['address'];
$query="UPDATE teacher SET t_name='$name',t_qualification='$qualification',t_phone='$phone',t_subject='$subject',t_password='$password',t_address='$address' WHERE t_id='".$id."'";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>alert('u');window.location.href='profile.php'</script>";
}else{
	echo "<script type='text/javascript'>alert('n');window.location.href='profile.php'</script>";
}

?>
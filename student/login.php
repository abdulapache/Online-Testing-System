<?php
$con=mysqli_connect('localhost','root','','uos');
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM student WHERE s_username='".$username."' AND s_password='".$password."'";
$q=mysqli_query($con,$query);
$row=mysqli_fetch_array($q);
$id=$row['s_id'];
if($row){
echo "<script type='text/javascript'>;
	window.location.href='dashboard/dashbord.php'</script>";
	session_start();
	echo $_SESSION['id']=$id;
}else{

echo "<script type='text/javascript'>;
	window.location.href='index.php'</script>";
}

?>
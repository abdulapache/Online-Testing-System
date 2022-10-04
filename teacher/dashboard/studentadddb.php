<?php
include 'dbconnect.php';
$name=$_POST['name'];
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$teacher=$_POST['teacher'];
$cnic=$_POST['cnic'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$file=$_FILES['file']['name'];
$uploaddir='../../admin/dashbord/upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){

}else{
	echo "not success";
}
$query="INSERT INTO student (s_name,s_fname,s_phone,s_course,t_id,s_fcnic,s_username,s_password,s_address,s_pic) VALUES ('$name','$fname','$phone','$course','$teacher','$cnic','$username','$password','$address','$file')";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='student.php'</script>";
}else
{
	echo "<script type='text/javascript'>;window.location.href='studentadd.php'</script>";
}
?>
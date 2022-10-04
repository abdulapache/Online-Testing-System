<?php
include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$cnic=$_POST['cnic'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$file=$_POST['file']['name'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){

		 "file is valid , and was successfully uploaded./n";
}
else{
	 "possible file upload attack!/n";
}
 "Here is some more debugging info";

echo $query="UPDATE student SET s_name='$name',s_fname='$fname',s_phone='$phone',s_course='$course',s_fcnic='$cnic',s_username='$username',s_password='$password',s_address='$address',s_pic='$file' WHERE s_id='".$id."' ";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='student.php'</script>";
}else
{
	echo "<script type='text/javascript'>;window.location.href='updatestudent.php'</script>";
}

?>
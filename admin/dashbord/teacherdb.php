<?php
include 'dbconnect.php';
$name=$_POST['name'];
$qualifi=$_POST['qualification'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$file=$_FILES['file']['name'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
	 "file is valid , and was successfully uploaded./n";
}
else{
	 "possible file upload attack!/n";
}
 "Here is some more debugging info";

$query="INSERT INTO teacher (t_name,t_qualification,t_phone,t_subject,t_username,t_password,t_address,t_pic) VALUES ('$name','$qualifi','$phone','$subject','$username','$password','$address','$file')";
$q=mysqli_query($con,$query);
if($q){
echo "<script type='text/javascript'>;
	window.location.href='teacher.php'</script>";
}else{
echo "<script type='text/javascript'>;
	window.location.href='teach.php'</script>";
}
?>

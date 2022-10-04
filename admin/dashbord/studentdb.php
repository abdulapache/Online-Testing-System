<?php
include 'dbconnect.php';
$name=$_POST['name'];
$fname=$_POST['fname'];
$course=$_POST['course'];
$teacher=$_POST['teacher'];
$cnic=$_POST['cnic'];
$phone=$_POST['phone'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];
$file=$_FILES['file']['name'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){
	
}
else{
	 "possible file upload attack!/n";
}
 "Here is some more debugging info";
 echo $query="INSERT INTO student (t_id,s_name,s_fname,s_course,s_fcnic,s_phone,s_username,s_password,s_address,s_pic) VALUES ('$teacher','$name','$fname','$course','$cnic','$phone','$username','$password','$address','$file')";
 $q=mysqli_query($con,$query);

if($q){
echo "<script type='text/javascript'>;
	window.location.href='student.php'</script>";
}else{
echo "<script type='text/javascript'>;
	window.location.href='stud.php'</script>";
}
?>
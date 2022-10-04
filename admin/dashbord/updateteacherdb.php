<?php
include 'dbconnect.php';
$id=$_GET['r'];
$name=$_POST['name'];
$qualification=$_POST['qualification'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$username=$_POST['username'];
$password=$_POST['password'];
$address=$_POST['address'];

echo $file=$_POST['file']['name'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadfile)){

		 "file is valid , and was successfully uploaded./n";
}
else{
	 "possible file upload attack!/n";
}
 "Here is some more debugging info";


echo $query="UPDATE teacher SET t_name='$name',t_qualification='$qualification',t_phone='$phone',t_subject='$subject',t_username='$username',t_password='$password',t_address='$address',t_pic='".$file."' WHERE t_id='".$id."'";
//  $q=mysqli_query($con,$query);
//   if($q){
//   	echo "<script type='text/javascript'>;
// 	window.location.href='teacher.php'</script>";

// }else{

// echo "<script type='text/javascript'>;
// 	window.location.href='update.php'</script>";
// }
 ?>
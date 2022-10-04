<?php
include 'dbconnect.php';
include 'header.php';
$code=$_POST['code'];
$student=$_POST['student'];
$file=$_FILES['file']['name'];
$remarks=$_POST['remarks'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
	echo 'success';
}else{
	echo 'not success';
}



$query="INSERT INTO assignment(t_id,a_code,s_id,a_file,a_remarks) VALUES('$id','$code','$student','$file','$remarks')";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='assignment.php'</script>";
}else
{
	echo "<script type='text/javascript'>;window.location.href='assignment.php'</script>";
}

?>
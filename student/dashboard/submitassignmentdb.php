<?php
include 'header.php';
$id;
$teacher=$_POST['teacher'];
$code=$_POST['code'];
$file=$_FILES['file']['name'];
$uploaddir='upload/';
$uploadfile=$uploaddir . basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
	echo "success";
}else{
	echo "not succes";
}






echo $query="INSERT INTO submit (st_id,t_id,a_id,s_file) VALUES ('$id','$teacher','$code','$file')";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='turnin.php'</script>";
}else{
	echo "<script type='text/javascript'>;window.location.href='turnin.php'</script>";
}
?>


  
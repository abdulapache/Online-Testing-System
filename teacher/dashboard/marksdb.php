<?php






include 'header.php';
include 'dbconnect.php';
$test=$_POST['test'];
$student=$_POST['student'];
$english=$_POST['english'];
$calculas=$_POST['calculas'];
$c=$_POST['c++'];
$database=$_POST['database'];
$physics=$_POST['physics'];
$query="INSERT INTO marks (m_test,s_id,t_id,m_english,m_calculas,m_cplus,m_database,m_physics) VALUES ('$test','$student','$id','$english','$calculas','$c','$database','$physics')";
$q=mysqli_query($con,$query);
if($q){
	echo "<script type='text/javascript'>;window.location.href='mark.php'</script>";
}else{
	echo "<script type='text/javascript'>;window.location.href='marks.php'</script>";
}
?>
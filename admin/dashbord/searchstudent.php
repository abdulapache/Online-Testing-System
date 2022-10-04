<?php
include("dbconnect.php");
$output = '';
$output1 = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($con, $_POST["query"]);
$query = "
	SELECT * FROM student
	WHERE s_name LIKE '%".$search."%'
	 OR s_fcnic LIKE '".$search."%'";
}
else
{
	$query = "
	SELECT * FROM student ORDER BY s_name ASC";
}






$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
	
	while($array = mysqli_fetch_array($result)){
		
		
	
		$output .= '
		
		  
		 <tr  >
											
											
<td >'.$array['s_name'].'</td>
<td >'.$array['s_fname'].'</td>
<td >'.$array['s_phone'].'</td>
<td >'.$array['s_course'].'</td>
<td >'.$array['s_fcnic'].'</td>
<td >'.$array['s_username'].'</td>
<td >'.$array['s_password'].'</td>
<td >'.$array['s_address'].'</td>
<td><img src="upload/'.$array['s_pic'].'" width=30></td>


              
												
											
                                                       
                                                        <td>
                                                       
                                                        <button data-toggle="tooltip" data-placement="top" title="Edit">
                                                             <a href="updatestudent.php?r='.$array['s_id'].'">Edit</a>
                                                        </button></td>
                                                        <td onclick="confirm("are you sure")">
                                                        <button  " data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <a  href="studentdelete.php?r='.$array['s_id'].'">Delete</a>
                                                        </button>
                                                        </td>
                                                        
                                                        
                                                   
                                                </th>
												
												
		
		</tr>
		
		
		';
	}
	
	echo $output;
}
else
{
	$output1 .= '
	 
	 <th>Student Not found</th>
	 
	 
	 
	
	';
		
		  
		
	echo $output1;
}
?>                                          
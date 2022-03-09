<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=employee_list.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
    include_once("DbaseConnection/connection.php");
    $conn=dbconnect();
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					<th>Employee ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Gender</th>
                    <th>Image</th>
				</tr>
			<tbody>
	";
 
	$query = $conn->query("SELECT * FROM `tblemployee`") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					<td>".$fetch['id']."</td>
					<td>".$fetch['first_name']."</td>
					<td>".$fetch['last_name']."</td>
					<td>".$fetch['email']."</td>
					<td>".$fetch['gender']."</td>
                    <td>".$fetch['image']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>
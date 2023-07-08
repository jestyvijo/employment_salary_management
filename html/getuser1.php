<?php
include_once("config.php");
if($_REQUEST['empid']) {
	$sql = "SELECT * FROM employee_details 
WHERE id='".$_REQUEST['empid']."'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));	
	$data = array();
	while( $rows = mysqli_fetch_assoc($resultset) ) {
		$data['a'] = $rows;
	}
	$sql1="SELECT * FROM employee WHERE em_id='".$_REQUEST['empid']."' ORDER BY employee.Salary DESC LIMIT 0,1;";
	$resultset1 = mysqli_query($conn, $sql1) or die("database error:". mysqli_error($conn));	
	while( $rows1 = mysqli_fetch_assoc($resultset1) ) {
		$data['b'] = $rows1;
	}
	echo json_encode($data);
} else {
	echo 0;	
}
?>


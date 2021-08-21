<?php  
$mysqli= @new mysqli("localhost", "root", "", "school_management_system_2021");
if(isset($_GET['Del'])){
	$ID= $_GET['Del'];
	$query= "delete from student_new_attendance where ID='".$ID."'";
	$result= mysqli_query($mysqli, $query);

	if($result){
		echo "Data deleted successfully";
	} else {
		echo "Please check your query";
	}
} else {
	echo "not running";
}



?>
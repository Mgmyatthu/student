<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
 $id=$_REQUEST['id'];
// Escape user inputs for security
		$register_number=$_REQUEST['register_number'];
	 	$name=$_REQUEST['name'];
	 	$rank=$_REQUEST['rank'];
	 	$appointment=$_REQUEST['appointment'];
	 	$department=$_REQUEST['department'];
	 	$class=$_REQUEST['class'];
		$book="UPDATE student SET register_number='$register_number', name='$name', rank='$rank', appointment='$appointment',  department='$department',class='$class' WHERE id='$id' ";
if(mysqli_query($link, $book)){
    header("Location:index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php
session_start();

$link=mysqli_connect("localhost", "root", "", "demo");
$id=$_REQUEST['bookid'];
$del_query="DELETE FROM student WHERE id='$id' ";
if(mysqli_query($link, $del_query)){

	header("Location:index.php");
}else{
	echo "Del error ".mysqli_error($link);
}
?>
<?php

$register_number = "";
$name = "";
$rank = "";
$appointment = "";
$department = "";
$class = "";
$imagename= "";

$id = 0;

$link = mysqli_connect('localhost','root','','demo');

if (isset($_POST['save'])) {
	$register_number = $_POST['register_number'];
	$name= $_POST['name'];
	$rank = $_POST['rank'];
	$appointment = $_POST['appointment'];
	$department = $_POST['department'];
	$class = $_POST['class'];
	$imagename= $_FILES['image']['name'];
	$tempname= $_FILES['image']['tmp_name'];
	$folder = 'upload/';
	move_uploaded_file($tempname, $folder.$imagename);

	$query = "INSERT INTO student (register_number,name,rank,appointment,department,class,image) VALUES ('$register_number','$name','$rank','$appointment','$department','$class','$imagename')";
	mysqli_query($link,$query);
	header('location: index.php');
}

	$result = mysqli_query($link,"SELECT * FROM student");


?>
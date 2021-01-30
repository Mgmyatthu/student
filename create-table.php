<?php
$link = mysqli_connect("localhost","root","","demo");
$sql = "CREATE TABLE IF NOT EXISTS student(
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		register_number VARCHAR(70) NOT NULL,
		name VARCHAR(70) NOT NULL,
		rank VARCHAR(70) NOT NULL,
		appointment VARCHAR(80) NOT NULL,
		department VARCHAR(80) NOT NULL,
		class VARCHAR(70) NOT NULL,
		image VARCHAR(80) NOT NULL
		)";
if (mysqli_query($link,$sql)){
	echo "Table created successfully.";
}
else {
	echo "Error: Could not able to excute $sql".mysqli_error($link);
}
mysqli_close($link);
?>
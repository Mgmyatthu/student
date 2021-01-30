<?php 
session_start();
$id=$_REQUEST['booksid'];
$link=mysqli_connect("localhost", "root", "", "demo");

$book="SELECT * FROM student WHERE id='$id' ";
if($result=mysqli_query($link, $book)){
    $row=mysqli_fetch_array($result);
}


// check button is submit
 if(isset($_POST['submit'])){
    if(empty($_FILES['photo']['name'])){
        $register_number=$_REQUEST['register_number'];
        $name=$_REQUEST['name'];
        $rank=$_REQUEST['rank'];
        $appointment=$_REQUEST['appointment'];
        $department=$_REQUEST['department'];
        $class=$_REQUEST['class'];
        $imagename= $_FILES['image']['name'];
    $tempname= $_FILES['image']['tmp_name'];
    $folder = 'upload/';
    move_uploaded_file($tempname, $folder.$imagename);
        $book="UPDATE student SET register_number='$register_number', name='$name', rank='$rank', appointment='$appointment',  department='$department', class='$class' WHERE id='$id' ";

    }
 }
 echo "<p class='mt-5' align='center'>". "<img style='width:30%;border:2px solid gray' src='upload/".$row['image']."'>" ."</p>";
mysqli_close($link);
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Soldier</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div style="width: 30%;" class="container">
                <h2  class="mt-5 mb-4">Edit</h2>

        <form method="POST" action="updateone.php?id=<?php echo $id=$_REQUEST['booksid']; ?>" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id=$_REQUEST['booksid']; ?>">
            <!-- studen tid -->
            <div class="form-group">
                <label>Reg. Number</label>
            <input required type="text" name="register_number" class="form-control" value="<?php echo $row['register_number']; ?>">
            </div>
            <div class="form-group">
                <label>Name</label>
            <input required type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label>Rank</label>
            <input required type="text" name="rank" class="form-control" value="<?php echo $row['rank']; ?>">
            </div>
            <div class="form-group">
                <label>Appointment</label>
            <input required type="text" name="appointment" class="form-control" value="<?php echo $row['appointment']; ?>">
            </div>
            <div class="form-group">
                <label>Department</label>
            <input required type="text" name="department" class="form-control" value="<?php echo $row['department']; ?>">
            </div>
            <div class="form-group">
                <label>Class</label>
            <input required type="text" name="class" class="form-control" value="<?php echo $row['class']; ?>">
            </div>
            <!-- end studen tid -->
            <!-- student name -->
            
            <input type="submit" name="submit" class="btn btn-dark mt-3" value="Update">
            <!-- end student name -->

                    <button class="btn btn-dark mt-3 ml-3"><a style="color: white;text-decoration: none;" href="index.php">Cancel</a></button>
        </form>

        </div>

        
        



</body>
</html>
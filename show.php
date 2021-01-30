<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Show</title>
  </head>
  <body style="background-color: #f1f1f1;">

    <?php
$link = mysqli_connect("localhost","root","","demo");
$id=$_REQUEST['bookeid'];

$sql = "SELECT * FROM student  WHERE id='$id' ";
if($result = mysqli_query($link,$sql)){
  if (mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_array($result)) {
      echo "<p class='mt-5' align='center'>". "<img style='width:30%;border:2px solid gray' src='upload/".$row['image']."'>" ."</p>";
      echo "<div class='container mt-4'>";
          echo "<div class='row justify-content-center'>";
            //hero-------------------
              echo "<div class='col-4'>";
                  echo "<p align='right' style='margin-right: 20px;font-size: 2rem; font-weight: bold;'>Reg. Number</p>";
                  echo "<p align='right' style='margin-right: 20px;font-size: 2rem; font-weight: bold;'>Name</p>";
                  echo "<p align='right' style='margin-right: 20px;font-size: 2rem; font-weight: bold;'>Rank</p>";
                  echo "<p align='right' style='margin-right: 20px;font-size: 2rem; font-weight: bold;'>Appointment</p>";
                  echo "<p align='right' style='margin-right: 20px;font-size: 2rem; font-weight: bold;'>Department</p>";
                  echo "<p align='right' style='margin-right: 20px;font-size: 2rem; font-weight: bold;'>Class</p>";
              echo "</div>";
            //hero---------------------
            //hero-------------------
              echo "<div class='col-4'>";
                  echo "<p style='font-size: 2rem;margin-left: 10px; font-weight: bold;'><font>AA-</font>".$row['register_number']."</p>";
                  echo "<p style='font-size: 2rem;margin-left: 10px; font-weight: bold;'>".$row['name']."</p>";
                  echo "<p style='font-size: 2rem;margin-left: 10px; font-weight: bold;'>$".$row['rank']."</p>";
                  echo "<p style='font-size: 2rem;margin-left: 10px; font-weight: bold;'>".$row['appointment']."</p>";
                  echo "<p style='font-size: 2rem;margin-left: 10px; font-weight: bold;'>".$row['department']."</p>";
                  echo "<p style='font-size: 2rem;margin-left: 10px; font-weight: bold;'>".$row['class']."</p>";
              echo "</div>";
            //hero---------------------
          echo "</div>";
      echo "</div>";
    }

    mysqli_free_result($result);
  }
  else {
    echo "No records matching your query were found.";
  }
}
else {
  echo "Error: Could not able to excute $sql".mysqli_error($link);
}
mysqli_close($link);
?>
<p class="mt-3" align="center"><button type="submit" name="save" class="btn btn-dark mb-3"><a href="index.php" style="color: white;text-decoration-line: none;">Back</a></button></p>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
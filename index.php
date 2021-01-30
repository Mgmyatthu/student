<?php include('server.php');?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Soldier</title>
    <style>
      #insert{
        display: none;
      }
    </style>
  </head>
  <body>
    <!-- Table -->
    <?php
$link = mysqli_connect("localhost","root","","demo");

$sql = "SELECT * FROM student";
if($result = mysqli_query($link,$sql)){
  if (mysqli_num_rows($result)>0){
    echo "<table class='table table-hover table-dark table-striped'>";
    echo "<tr>";
    echo "<th scope='col'>Reg. Number</th>";
    echo "<th scope='col'>Name</th>";
    echo "<th scope='col'>Rank</th>";
    echo "<th scope='col'>Appointment</th>";
    echo "<th scope='col'>Department</th>";
    echo "<th scope='col'>Class</th>";
    echo "<th scope='col'>Image</th>";
    echo "<th scope='col'>Action</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td><font>AA-</font>".$row['register_number']."</td>";
      echo "<td>".$row['name']."</td>";
      echo "<td>".$row['rank']."</td>";
      echo "<td>".$row['appointment']."</td>";
      echo "<td>".$row['department']."</td>";
      echo "<td>".$row['class']."</td>";
      echo "<td>". "<img style='width:50px;border-radius:50%;border:2px solid gray' src='upload/".$row['image']."'>" ."</td>";
      echo "<td><div class='dropdown'>
            <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
              Action
            </a>

            <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
              <li><a class='dropdown-item' href='update.php?booksid=$row[id]'>Edit</a></li>
              <li><a class='dropdown-item' href='delete.php?bookid=$row[id]'>Delete</a></li>
              <li><a class='dropdown-item' href='show.php?bookeid=$row[id]'>Show</a></li>
            </ul>
          </div>
        </td>";
      echo "</tr>";
    }
    echo "</table>";

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
<p align="center">
<button onclick="angle()"  class="btn btn-dark m-2">Insert</button>
<button onclick="satan()"  class="btn btn-dark m-2">Cancal</button>
</p>
<script>
  function angle(){
    document.getElementById("insert").style.display="block";
  }
  function satan(){
    document.getElementById("insert").style.display="none";
  }
</script>

    <!-- Table -->

    <form id="insert" action="server.php" method="post" enctype="multipart/form-data">
            
            <div style="width: 30%;" class="container">
                <h2 class="mt-5 mb-4">INSERT BOOKS</h2>
            
                    <div class="mb-3">
                    <label for="examplename" class="form-label">Reg. Number</label>
                    <input required type="text" name="register_number" class="form-control" id="examplename">
                    </div> 

                    <div class="mb-3">
                    <label for="examplename1" class="form-label">Name</label>
                    <input required type="text" name="name" class="form-control" id="examplename1">
                    </div>

                    <div class="mb-3">
                    <label for="examplename2" class="form-label">Rank</label>
                    <input required type="text" name="rank" class="form-control" id="examplename2">
                    </div> 

                    <div class="mb-3">
                    <label for="examplename3" class="form-label">Appointment</label>
                    <input required type="text" name="appointment" class="form-control" id="examplename3">
                    </div>

                    <div class="mb-3">
                    <label for="examplename4" class="form-label">Department</label>
                    <input required type="text" name="department" class="form-control" id="examplename4">
                    </div>

                    <div class="mb-3">
                    <label for="examplename4" class="form-label">Class</label>
                    <input required type="text" name="class" class="form-control" id="examplename4">
                    </div>

                    <div class="mb-3">
                      <label for="formFile" class="form-label">Upload Photo</label>
                      <input required name="image" class="form-control" type="file" id="formFile">
                    </div>

                    <button type="submit" name="save" class="btn btn-dark mb-3 mt-3">Confirm identity</button>

            </div>
    </form>
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
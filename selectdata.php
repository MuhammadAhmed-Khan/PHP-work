<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
      
<table class="table table-striped">
  <tr>
    <TH>ID</TH>
    <TH>Name</TH>
    <TH>Email</TH>
    <TH>Age</TH>
    <TH>City</TH>
    <TH>Edit</TH>
    <TH>Delete</TH>
  </tr>
  <?php
  $sql = "SELECT * FROM student_tbl";
  $query = mysqli_query($conn,$sql);
  if (mysqli_num_rows($query)>0) {
   while ($row = mysqli_fetch_assoc($query)) { 
  ?>
  <tr>
  <td><?= $row['id']?></td>
  <td><?= $row['name']?></td>
  <td><?= $row['email']?></td>
  <td><?= $row['age']?></td>
  <td><?= $row['city']?></td>
  <td><a href="updateform.php?upd_id=<?php echo $row['id']?>" class="btn btn-success">Edit</a></td>
  <td><a href="deletecode.php?del_id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
  </tr>

  <?php
  }
}
  ?>
</table>
</div>
</body>
</html>
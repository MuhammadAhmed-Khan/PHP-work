<?php
include 'conn.php';


?>
<html >
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<?php

$getid = $_GET['upd_id'];

$sql = "SELECT * FROM student_tbl WHERE id = '$getid'";

$query = mysqli_query($conn,$sql);

if (mysqli_num_rows($query)>0) {

while ($row = mysqli_fetch_assoc($query)) {

?>
    <div class="container mt-5">
<form action="updcode.php" method="POST">
<input type="hidden" name="id" class="form-control" value="<?= $row['id']?>"/><!-- database table id -->
<br>
  <div class="mb-3">
   
    <label class="form-label">Name</label>
    <input type="text" name="nm" class="form-control" value="<?= $row['name']?>">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="em" class="form-control" value="<?= $row['email']?>">
  </div>

  <div class="mb-3">
    <label  class="form-label">Age</label>
    <input type="number" name="ag" class="form-control" value="<?= $row['age']?>">
  </div>
  <div class="mb-3">
    <label  class="form-label">City</label>
    <input type="text" name="ct" class="form-control" value="<?= $row['city']?>">
  </div>
  <button type="submit" class="btn btn-success" name="update" >Data Update</button>
</form>
</div>
<?php
}
}
?>
</body>
</html>
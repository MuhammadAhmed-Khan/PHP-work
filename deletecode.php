<?php
include 'conn.php';


$delid = $_GET['del_id'];

// echo $delid;


$sql = "DELETE FROM student_tbl WHERE id = $delid";

$query = mysqli_query($conn,$sql);

header("Location: http://localhost:8080/Crud/selectdata.php");

?>
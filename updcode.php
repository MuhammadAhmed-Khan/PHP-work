<?php

include 'conn.php';


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['nm'];
    $email = $_POST['em'];
    $age = $_POST['ag'];
    $city = $_POST['ct'];



    $sql = "UPDATE student_tbl SET
    name = '$name',
    email='$email',
    age='$age',
    city = '$city'
    WHERE id = '$id'";


$query = mysqli_query($conn,$sql);


header("Location: http://localhost:8080/Crud/selectdata.php");

}



?>
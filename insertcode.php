<?php
include 'conn.php';

if(isset($_POST['insert'])) {
   
    $name = $_POST['nm'];
    $email = $_POST['em'];
    $age = $_POST['ag'];
    $city = $_POST['ct'];

    $sql = "INSERT INTO student_tbl (name,email,age,city) values('$name','$email','$age','$city')";

    $query = mysqli_query($conn,$sql);

        header("Location: http://localhost:8080/Crud/selectdata.php");

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="#" method="POST" enctype="multipart/form-data"> 
       <input type="file" name="image">
       <br><br>
       <input type="submit" value="submit" name="submit">
   </form>
  
<?php
 if (isset($_FILES['image'])) {
    //  echo '<pre>';
    //  print_r($_FILES['image']);
    //  echo '</pre>';
$filename = $_FILES['image']['name'];
$filesize = $_FILES['image']['size'];
$filetemp = $_FILES['image']['tmp_name'];
$filetype = $_FILES['image']['type'];

if(move_uploaded_file($filetemp, "upload-image/". $filename)){
    echo "image uploaded succesfully";
}
else {
    echo "invalid query";
}



 }
?>

</body>
</html>

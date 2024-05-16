<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php


//create connection
$conn = mysqli_connect("localhost","root","1234","test");


if($conn){
echo "sucess";
}else{
    die("Error : Connection Failed :".mysqli_connect_error());
}

?>
</body>
</html>





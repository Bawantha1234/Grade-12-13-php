<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
<h1 style="color: red">Hello</h1>

<?php
# Define Global Variable

$a = 5; $b = 10;
function bawantha(){
    global $a; global $b;
    echo "a value : ", $a;
    echo "<br>","b value : ",$b;
}
bawantha();

?>

</body>
</html>

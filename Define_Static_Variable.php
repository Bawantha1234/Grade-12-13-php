
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php</title>
</head>
<body>
<h1 style="color: red">Hello</h1>

<?php

# Define Static Variable

function pasindu(){
    static $x = 0;
    echo "value :",$x,"<br>";
    $x++;

}
pasindu();
pasindu();
pasindu();

?>


</body>
</html>
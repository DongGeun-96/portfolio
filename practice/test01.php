<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    function get(){
        return [1,2,3];
    }

    $getname = get();

    echo $getname[0];
?>


</body>
</html>

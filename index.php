<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> HI </h1>


    <?php
    $random = rand();
    $order = round(log10($random));

    echo $random / pow(10, $order)  . "</br>";
    ?>
</body>
</html>
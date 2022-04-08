<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP testing</title>
</head>
<body>
    <?php
        // echo "Hello Everyone <br>";
        // print_r("Keep going <br>");
        // print("Do or Die <br>");
        // var_dump("Welcome to Code Lab <br>");
        $number = 10.2;
        $name = "David";
        $right = true;
        $arr = ['John', 'Doe', 'Smith', 25, true];
        echo gettype($number)."<br>";
        echo gettype($name)."<br>";
        echo gettype($right)."<br>";
        print_r($arr); echo "<br>";
        var_dump($arr);
    ?>
</body>
</html>
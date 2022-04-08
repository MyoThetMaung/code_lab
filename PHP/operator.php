<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php
        //arithmetic operator
        /*
        $number1 = 10;
        $number2 = 5;
        $status = (1==10) ? "equal" : "not equal";
        echo $status."<br>";
        $number2+=5;
        echo $number2; 
        echo $number1++."<br>";
        echo $number1."<br>";

        print($number2  == 5)."<br>";
        var_dump($number2  == 5);
        */



        //Logical operator
        if(1 == 1 && 1 != 2){
            echo "true";
            echo "<br>";
        }else{
            echo "false";
        }

        if (1 == 1 || 1 == 2) {
            echo "true"; 
        }else{
            echo "false";
        }



    ?>
</body>
</html>
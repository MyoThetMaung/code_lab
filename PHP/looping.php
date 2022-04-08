<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
        //while
        $number = 1;
        while($number <= 5){
            echo  "this is $number <br>";
            $number++;
        }
        echo "<hr>";

        //do while
        $number1 = 0;
        do{
            echo "this is $number1 <br>";
            $number1++;
        }while($number1<=5);
        echo "<hr>";

        //for loop
        for($i=0; $i<=5; $i++){
            echo "this is $i <br>";
        }
        echo "<hr>";
        
        //foreach
        $arr = ["a","b","c","d","e"];
        foreach($arr as $a){
            echo "$a <br>";
        }
        

    ?>
</body>
</html>
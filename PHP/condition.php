<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>
<body>
    <?php
        $number = 24;
        //if statement
        if($number == 20){
            echo "it is 20";
        }else if($number == 24){
            echo "it is 24 with if statement";
            echo "<br>";
        }else{
            echo "error";
        }

        // switch statement
        switch($number){
            case 30:
                echo "it is 30";
                break;
            case 40:
                echo "it is 40";
                break;
            case 24:
                echo "it is 24 with switch statement";
                break;
            default:
                echo "it is error";
                break;
        }


    ?>
</body>
</html>
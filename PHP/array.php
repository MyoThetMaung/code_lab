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
       $fruits = ['apple','orange','banana','pineapple','strawberry'];
       for($i = 0; $i<count($fruits); $i++){
           echo $fruits[$i] . "<br>";
       };
       echo "<hr>";
       foreach($fruits as $fruit){
           echo $fruit . "<br>";
       }
       echo "<hr>";

       //associated array
       $car = [
           'name' => 'Toyota',
           'price'=> '$10,000',
           'model'=> 'Corolla',
       ];
       echo "<pre>";
       print_r($car);
       echo "<hr>";
       foreach($car as $key=>$value){
           print_r($key." is ".$value."<br>");
       }
       echo "<hr>";
       $people = [
        'customers' => [
            'name' => 'John',
            'age' => '20',
       ]
    ];
       print_r($people['customers']['age']);

        
        

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
  <form action="" method="POST">
      Name <input type="text" name="username" > <br>
      Phone <input type="number" name="phone" > <br>
      <input type="submit" value="Save" name="submitBtn">
      <button type="submit" name="clearBtn">Clear</button>
  </form>
    <?php
        if (isset($_POST['submitBtn'])) {
            $name = $_POST['username'];
            $phone = $_POST['phone'];
            if ($name == null || $phone == null) {
                echo "Please fill all the fields";
            } else {
                echo $name."<br>";
                echo $phone;
            }
        }
        if(isset($_POST['clearBtn'])){
            echo "Clear all";
        }
    ?>
 
</body>
</html>
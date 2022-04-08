<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>
<body>
    <h3>Login Form</h3>
    <form action="" method="POST">
        Email <input type="text" name="email"> <br>
        Password <input type="text" name="password"> <br>
        <input type="submit" name="submit" value="Login">
    </form>

    <?php
       $email = 'saimon@gmail.com';
       $password = 'saimon';
       $password = password_hash($password, PASSWORD_BCRYPT);
       if(isset($_POST['submit'])){
           $userEmail = $_POST['email'];
           $userPass = $_POST['password'];
           if($userEmail == $email && password_verify($userPass,$password)){
               echo 'Login Successful';
              }else{
                  echo 'Login Failed';
              }
       } 
    ?>
</body>
</html>
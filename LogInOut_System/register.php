<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In and Out System</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="text-center mt-3">
                    <a href="register.php"><button class="btn bg-primary text-white" style="width: 200px;">Register</button></a>
                </div>
                <div class="text-center mt-3">
                    <a href="login.php"><button class="btn bg-success text-white" style="width: 200px;">Login</button></a>
                </div>
                <div class="text-center mt-3">
                    <a href="logout.php"><button class="btn bg-danger text-white" style="width: 200px;">Logout</button></a>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <h3>Register</h3>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Enter confirm password">
                            </div>
                            <button class="btn btn-info mt-3 float-end" type="submit" name="register">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     
        session_start();
        function strongPass($password){
            $toUpper = false;
            $toLower = false;
            $toNumber = false;
            $toSpecial = false;
            
            if(preg_match('/[A-Z]/', $password)){
                $toUpper = true;
            }
            if(preg_match('/[a-z]/', $password)){
                $toLower = true;
            }
            if(preg_match('/[0-9]/', $password)){
                $toNumber = true;
            }
            if(preg_match('/[!@#$%^&*]/', $password)){
                $toSpecial = true;
            }
            if($toUpper && $toLower && $toNumber && $toSpecial){
                return true;
            }else{
                return false;
            }
        }

    
        if(isset($_POST['register'])){
            $name =  $_POST['name'];
            $email =  $_POST['email'];
            $password =  $_POST['password'];
            $confirm_password =  $_POST['confirm_password'];
            if($name != null && $email != null && $password != null && $confirm_password != null){
                if(strlen($password) >= 6 && strlen($confirm_password) >= 6){
                    if($password == $confirm_password){
                        $status = strongPass($password);
                        if($status == true){
                            $_SESSION['name'] = $name;
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                            echo "Register success";
                        }else{
                            echo "Password must be at least 6 characters long and contain at least one upper case letter, one lower case letter, one number and one special character";
                        }
                    }else{
                        echo "Password and Confirm Password are not same";
                    }
                }else{
                    echo "Password must be at least 6 characters";
                }
            }else{
                echo "All field must be filled";
            }
        }

    ?>
</body>
</html>
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
                        <div class="bg-success text-center text-white">
                            <p class="p-5 fs-5">Log Out Successfully</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();
    session_destroy();
    ?>
</body>
</html>
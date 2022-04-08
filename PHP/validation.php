<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
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
<?php
    $errorName = $errorEmail = $errorPhone = $errorAddress = "";
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        if($name == '' || $email == '' || $phone == '' || $address == ''){
            if($name == ''){
                $errorName =  'Name is required';
            }
            if($email == ''){
                $errorEmail =  'Email is required';
            }
            if($phone == ''){
                $errorPhone =  'Phone is required';
            }
            if($address == ''){
                $errorAddress =  'Address is required';
            }
        }
    }
?>  
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6 bg-light shadow">
                <div class="my-3">
                    <form action="" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name">
                            <small class="text-danger"><?php echo $errorName; ?></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email">
                            <small class="text-danger"><?php echo $errorEmail; ?></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone">
                            <small class="text-danger"><?php echo $errorPhone; ?></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <textarea name="address" class="form-control" cols="20" rows="5" placeholder="Enter Address"></textarea>
                            <small class="text-danger"><?php echo $errorAddress; ?></small>
                        </div>
                        <button class="btn btn-success float-end my-4" name="save" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
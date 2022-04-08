<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    
    <h3>File store</h3>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="userProfile" > <br><br>
        <input type="submit" value="Upload" name="store">
    </form> 

    <?php
        if (isset($_POST['store'])) {
            $temp_name = $_FILES['userProfile']['tmp_name'];
            $img_name = $_FILES['userProfile']['name'];
            $file_path = "images/".$img_name;

            if(move_uploaded_file($temp_name, $file_path)){
                move_uploaded_file($temp_name, $file_path);
                echo "success";
            }else {
                echo "error";
            }
        }
           
        
    ?>
</body>
</html>
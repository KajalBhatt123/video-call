<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'dbconnect.php';

    $match = true;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $cpassword = $_POST['cpassword'];

    while($match){
        $id = mt_rand(1000000000,9999999999);
        $existsql = "SELECT * from users WHERE ID = '$id'";
        $result = mysqli_query($conn, $existsql);
        $numExists = mysqli_num_rows($result);

        if($numExists>0){
            $match = true;
        }
        else{
            $match = false;
        }
    }

    $existsql = "SELECT * from users WHERE username = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numExists = mysqli_num_rows($result);


    if($numExists>0){
        echo '<div class="alert alert-danger" role="alert">
        Username already exists
      </div>';
    }
    else{
        if($password == $cpassword){
            $sql = "INSERT INTO `users`(`Username`,`Email`,`Password`,`ID`) VALUES ('$username', '$email','$password','$id')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Registration Successful";
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: index.php");
            }
            else{
                echo "Registration Failed";
            }
        }
        else{
            echo '<div class="alert alert-warning d-flex align-items-center" role="alert">
            <div>
            An example warning alert with an icon
            </div>
        </div>';
        }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
</body>
</html>
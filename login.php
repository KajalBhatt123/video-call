<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'dbconnect.php';

    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;


    $sql = "SELECT * from users WHERE (Username='$username') And (Password='$password')";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "login Successful";
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php");
    }else{
        echo "login Failed";
    }
}

?>
<?php

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    date_default_timezone_get('Jakarta');
    $created = date("Y-m-d H:i:s");

    include_once("config.php");

    $result = mysqli_query($conn_db, "INSERT INTO users('username','gender','email','password','created')");

    echo "Users ". $username ." added succesfully. <a href='login_page.php'>Login</a>";
    if($result){
        header("refresh:5;url=login_page.php");
        echo 'Success Register, You Will be redirected to Login page in 5 secs.';
    }
}
?>
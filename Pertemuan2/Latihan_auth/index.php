<?php
session_start();

$database = [
    'username' => 'onic',
    'password' => 'open123'
];

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $database['username'] && $password == $database['password']){
        $_SESSION['username'] = $username;
        header("location:admin.php");
    } else {
        echo '<script> alert("Username atau Password salah!");
        window.location="login_page.php"; </script>';
    }
} else {
    echo '<script> window.location="landing_page.php"; </script>';
}
?>
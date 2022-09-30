<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
    alert("Anda berhasil logout");
    window.location="login_page.php";
    </script>';
}else {
    header("Location:login_page.php");
    exit();
}
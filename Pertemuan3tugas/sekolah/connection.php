<?php

$connection = mysqli_connect("localhost", "root", "", "sekolahonic");
if(!$connection){
    echo mysqli_connect_error();
}
<?php

$connnection = mysqli_connect("localhost", "root", "", "project1");
if (!$connnection){
    die("Connection Failed : " . mysqli_connect_error());
}echo "Connected Succesfully to Project 1<br>";

$query = mysqli_query($connnection, "SELECT ID, NAMA_LENGKAP, JURUSAN FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connnection));
}
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connnection);
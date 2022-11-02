<?php

$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection){
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connection Succesfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TTL, NIP, JURUSAN) VALUES('', 'Onic Agustino', 'Jalan Solo-Purwodadi KM 12', '2005-08-17', 'Y20991', 'RPL')");
if(!$query_insert){
    echo("Error query " . mysqli_error("$connection"));
}
mysqli_close($connection);
<?php

$db = "174.138.29.9";
$user = "uhzahqfmdx";
$password = "Ngj6WtTnwA";
$nama_database = "uhzahqfmdx";

$db = mysqli_connect($db, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
else{
    printf("sukses");
}

?>
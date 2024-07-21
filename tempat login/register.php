<?php
require 'koneksi.php';
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "INSERT INTO tbl_users (fullname,   email, password) 
            VALUES ('$fullname', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login2.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
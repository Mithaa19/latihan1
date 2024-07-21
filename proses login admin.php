<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Tetapkan username dan password admin yang tetap
    $adminUsername = 'admin1';
    $adminPassword = 'admin123';

    // Cek apakah admin sudah ada
    $checkSql = "SELECT * FROM user_admin WHERE username='$adminUsername' AND password='$adminPassword'";
    $result = mysqli_query($conn, $checkSql);

    if ($result->num_rows > 0) {
        echo "username dan password benar!.";
    } else {
        // Jika admin belum ada, masukkan ke database
        $sql = "INSERT INTO user_admin (username, password) VALUES ('$adminUsername', '$adminPassword')";
        
        if (mysqli_query($conn, $sql)) {
            echo "username dan password benar!.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>

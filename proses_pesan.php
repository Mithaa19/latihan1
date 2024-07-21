<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO pesanan (nama, nomor, produk, jumlah) VALUES ('$nama', '$nomor', '$produk', '$jumlah')";

    if (mysqli_query($conn, $sql)) {
        echo "Pesanan berhasil dikirim!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
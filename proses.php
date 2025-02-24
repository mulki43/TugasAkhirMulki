<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    require_once "koneksi.php";

    $sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

    if ($mysqli->query($sql)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Maaf, terjadi kesalahan: " . $mysqli->error . "'); window.location.href='contact.php';</script>";
    }
}
?>

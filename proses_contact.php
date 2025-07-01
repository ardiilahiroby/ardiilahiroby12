<?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $pesan = mysqli_real_escape_string($db, $_POST['pesan']);

    $sql = "INSERT INTO tbl_contact (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    if (mysqli_query($db, $sql)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='contact.php';</script>";
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>

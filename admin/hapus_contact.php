<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}

require_once("../koneksi.php");

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    mysqli_query($db, "DELETE FROM tbl_contact WHERE id_contact = $id");
}

header("Location: data_contact.php");
exit;

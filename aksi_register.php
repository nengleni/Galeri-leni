<?php
include "koneksi.php";

$Username = $_POST['Username'];
$password = md5($_POST['Password']);
$email = $_POST['Email'];
$namalengkap = $_POST['NamaLengkap'];
$alamat = $_POST['Alamat'];

$sql = mysqli_query($koneksi, "INSERT INTO user VALUES ('','$Username','$password','$email','$namalengkap','$alamat')");
if ($sql) {
    echo "<script>
    alert('pendaftaran akun berhasil');
    location.href='../login.php';
    </script>";
}

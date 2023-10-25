<?php
require_once 'sungutWebKoneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['username'];
    $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    if ($stmt->execute([$new_username, $new_password])) {
        echo "Registrasi berhasil. Silakan login.";
        header("location: loading.html"); 
    } else {
        echo "Registrasi gagal. Username mungkin sudah digunakan.";
        header("location: gagal.php"); 
    }
}
?>

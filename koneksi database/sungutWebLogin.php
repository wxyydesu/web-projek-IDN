<?php
session_start();
require_once 'sungutWebKoneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("location: loading.html"); 
    } else {
        echo "Login gagal. Cek kembali username dan password.";
        header("location: gagalcopy.php"); 
    }
}
?>

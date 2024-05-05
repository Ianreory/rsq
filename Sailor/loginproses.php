<?php
include('koneksi.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

   
    if ($user) {

        if ($password === $user["password"]) {
           
            session_start();
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            header("Location: index.php"); 
            exit();
        } else {
            $login_error = "Kata sandi yang dimasukkan salah";
        }
    } else {
        $login_error = "Nama pengguna tidak ditemukan";
    }

    
    $stmt->close();
    $conn->close();
}
?>

session_start();
if (!isset($_SESSION['user_id'])) {
    // Pengguna belum login, arahkan kembali ke halaman login
    header("Location: login.php");
    exit();
}

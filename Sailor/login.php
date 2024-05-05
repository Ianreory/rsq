<?php
require_once("koneksi.php");

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kecocokan username
    $query = "SELECT id, username, password FROM users WHERE username = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    // Ambil hasil query
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Login berhasil, set session
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        // Alihkan ke halaman profil atau halaman lain yang sesuai
        header("Location:profil.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan kesalahan
        echo "Username atau password salah.";
    }
    $user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];
    
} session_start(); // Pastikan untuk selalu memanggil session_start() di halaman lain juga


?>

<?php include 'header.php'; ?>
<br>

<!-- ======= Login Section ======= -->
<section id="login" class="d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="loginproses.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button  type="submit" class="btn btn-primary">Login</button>
                            <a href="daftar.php" class="btn btn-secondary">Daftar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Login Section -->

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>
<?php include 'footer.php'; ?>

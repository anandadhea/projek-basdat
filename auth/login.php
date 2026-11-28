<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pelanggan</title>
</head>
<body>
    
    <div class="login-container">
        <div class="login-card">

        <a href="../index.php" class="logo">PharmaTrack</a>

        <h2>Selamat Datang Kembali!</h2>

        <p class="login-description">
            Silahkan masuk ke akun PharmaTrack kamu!
        </p>

        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username atau Email</label>
                <input type="password" id="password" name="password" placeholder="Masukan password" required>

            </div>

            <button type="submit" class="btn-login">Login</button>

        </form>

        <p class="register-link">
            Belum punya akun?
            <a href="register.php">Daftar Sekarang</a>
        </p>

        <a href="../index.php" class="back-link">Kembali ke Beranda</a>

        </div>

    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Daftar Pelanggan</title>
</head>
<body>

    <div class="register-container">
        <div class="register-card">
            <a href="../index.php" class="logo">PharmaTrack</a>

            <h2>Buat Akun Baru</h2>

            <p class="register-description">
                Yuk buat akun PharmaTrack untuk menikmati kemudahan layanan apotek
            </p>

            <form action="" method="POST">

                <h3>Informasi Akun</h3>

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukan nama lengkap" required>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Buat username" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email" required>
                </div>

                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" placeholder="Buat password" required>
                </div>

                <h3>Informasi Pribadi</h3>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="no_telepon">Nomor Telepon</label>
                    <input type="tel" id="no_telepon" name="no_telepon" placeholder="Masukan nomor telepon" required>
                </div>

                <h3>Alamat</h3>

                <div class="form-group">
                    <label for="provinsi">Provinsi</label>
                    <input type="text" id="provinsi" name="provinsi" placeholder="Masukan provinsi" required>
                </div>

                <div class="form-group">
                    <label for="kabupaten">Kabupaten</label>
                    <input type="text" id="kabupaten" name="kabupaten" placeholder="Masukan kabupaten" required>
                </div>

                <div class="form-group">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukan kecamatan" required>
                </div>

                <div class="form-group">
                    <label for="desa">Desa</label>
                    <input type="text" id="desa" name="desa" placeholder="Masukan desa" required>
                </div>

                <div class="form-group">
                    <label for="nama_jalan">Nama Jalan</label>
                    <textarea id="nama_jalan" name="nama_jalan" placeholder="Masukan nama jalan dan detail alamat" required></textarea>
                </div>

                <button type="submit" class="btn-register">
                    Daftar
                </button>

            </form>

            <a href="../index.php" class="back-link">Kembali ke Beranda</a>

        </div>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOWL Indonesia</title>
    <link rel="stylesheet" href="<?= base_url('assets/login1/css/style.css') ?>">
    <link rel="icon" type="img" href="<?= base_url('assets/login1/images/orion.jpeg') ?>" />
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="<?= base_url('Auth/registration') ?>" method="POST" enctype="multipart/form-data">
                <h1>Registrasi</h1>
                <hr>
                <div class="form-floating mb-3">
                    <label for="Nama_lengkap">Full Name</label>
                    <input class="form-control" id="Nama_lengkap" name="Nama_lengkap" type="text" placeholder="Nama Lengkap" required />
                </div>
                <div class="form-floating mb-3">
                    <label for="username">Username</label>
                    <input class="form-control" id="username" name="username" type="text" placeholder="Username" required />
                </div>
                <div class="form-floating mb-3">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Create a password" required />
                </div>
                <div class="form-floating mb-3">
                    <label for="email">Email address</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="Email Address" required />
                </div>
                <div class="form-floating mb-3">
                    <label for="level">Level</label>
                    <select class="form-control" id="level" name="level" required>
                        <option value="--Pilih--">---Pilih---</option>
                        <option value="admin">Admin</option>
                        <option value="Kepala_cabang"> Kepala Cabang</option>
                        <option value="karyawan">Karyawan</option>
                        <option value="Driver">Driver</option>
                    </select>
                </div>
                <div class="form-floating mb-3">
                    <label for="upload_foto">Upload Foto</label>
                    <input class="form-control" id="upload_foto" name="upload_foto" type="file" required />
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="right">
            <br>
            <img src="<?= base_url('assets/login1/images/orion.jpeg') ?>" alt="">
        </div>
    </div>
</body>

</html>

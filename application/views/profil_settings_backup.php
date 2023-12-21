<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('templates/header.php') ?>
</head>

<body>
    <main class="main">
        <?php $this->load->view('templates/nav.php') ?>

        <div class="content">
            <h1>Settings</h1>

            <div class="card">
                <div class="card-header">
                    <b>Avatar</b>
                    <div style="display: flex; gap: 1em">
                        <a href="<?= base_url('setting/remove_avatar') ?>" class="txt-red">Remove Avatar</a>
                        <a href="<?= base_url('setting/upload_avatar') ?>">Change Avatar</a>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    $avatar = $current_user->upload_foto;
                    // ?
                    //     base_url('upload/avatar/' . $current_user->upload_foto)
                    //     : get_gravatar($current_user->email)
                    ?>
                    <img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->Nama_lengkap, TRUE) ?>" height="80" width="80">
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <b>Profile Settings</b>
                    <a href="<?= site_url('setting/edit_profile') ?>">Edit Profile</a>
                </div>
                <div class="card-body">
                    Name: <span class="text-gray"><?= html_escape($current_user->Nama_lengkap) ?></span>
                    <br>
                    Email: <span class="text-gray"><?= html_escape($current_user->email) ?></span>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <b>Security & Password</b>
                    <a href="<?= site_url('setting/edit_password') ?>">Edit Password</a>
                </div>
                <div class="card-body">
                    Your Password: <span class="text-gray">******</span>
                    <br>
                    Last Changed: <span class="text-gray">22-08-2020</span>
                </div>
            </div>

            <?php $this->load->view('templates/footer.php') ?>
        </div>
    </main>


    <?php if ($this->session->flashdata('message')) : ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '<?= $this->session->flashdata('message') ?>'
            })
        </script>
    <?php endif ?>
</body>

</html>
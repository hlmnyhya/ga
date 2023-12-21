
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Settings</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                        <div class="row">
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
                        </div>
                        
                    </div>
                </main>
                
                
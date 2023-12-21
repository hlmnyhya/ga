<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Supplier</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('data_karyawan/ProsesEditdatasupplier'); ?>">

        <input type="hidden" name="id_penyedia" value= "<?php echo $supplier['id_penyedia']; ?>">
            <div class="row mb-3">
                <label for="nama_penyedia_eksternal" class="col-sm-2 col-form-label">Nama Penyedia Eksternal</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_penyedia_eksternal" required="" value="<?php echo $supplier['nama_penyedia_eksternal']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="alamat" required="" value="<?php echo $supplier['alamat']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="contact_person" class="col-sm-2 col-form-label">Contact Person</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="contact_person" required="" value="<?php echo $supplier['contact_person']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="e-mail" class="col-sm-2 col-form-label">E-Mail</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" name="e-mail" required="" value="<?php echo $supplier['e-mail']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_telp" class="col-sm-2 col-form-label">No Telp</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_telp" required="" value="<?php echo $supplier['no_telp']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="bidang_usaha" class="col-sm-2 col-form-label">Bidang Usaha</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="bidang_usaha" required="" value="<?php echo $supplier['bidang_usaha']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="keterangan_terdaftar" class="col-sm-2 col-form-label">Keterangan Terdaftar</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="keterangan_terdaftar" required="" value="<?php echo $supplier['keterangan_terdaftar']; ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 10px; margin-button: 10px;">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </form>
    </div>
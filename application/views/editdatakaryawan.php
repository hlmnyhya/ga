<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Karyawan</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('data_karyawan/ProsesEditdatakaryawan'); ?>">

        <input type="hidden" name="id_karyawan" value= "<?php echo $karyawan['id_karyawan']; ?>">
            <div class="row mb-3">
                <label for="no_karyawan" class="col-sm-2 col-form-label">No Karyawan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_karyawan" required="" value="<?php echo $karyawan['no_karyawan']; ?>">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama" required="" value="<?php echo $karyawan['nama']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jabatan" required="" value="<?php echo $karyawan['jabatan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" required="" value="<?php echo $karyawan['email']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="divisi" required="" value="<?php echo $karyawan['divisi']; ?>">
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
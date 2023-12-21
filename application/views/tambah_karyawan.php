

    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Karyawan</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('karyawan/ProsesTambah_karyawan'); ?>">
            <div class="row mb-3">
                <label for="nama_kecamatan" class="col-sm-2 col-form-label">No Karyawan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_karyawan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jabatan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="divisi">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 10px; margin-button: 10px;">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </div>
            </div>
        </form>
                        </div>
                        
                    </div>
                </main>
                
                
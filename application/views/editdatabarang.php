<div id="layoutSidenav_content">
                <main>
                    <hr>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Barang Masuk</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('barang/ProsesEditData'); ?>">

        <input type="hidden" name="id_barang" value= "<?php echo $barang['id_barang']; ?>">
            <div class="row mb-3">
                <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kode_barang" required="" value="<?php echo $barang['kode_barang']; ?>">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_barang" required="" value="<?php echo $barang['nama_barang']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jenis_barang" required="" value="<?php echo $barang['jenis_barang']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="satuan" required="" value="<?php echo $barang['satuan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kategori" required="" value="<?php echo $barang['kategori']; ?>">
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
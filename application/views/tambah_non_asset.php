        
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Barang Asset</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('barang/ProsesTambah_non_asset'); ?>">
            <div class="row mb-3">
                <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kode_barang_non">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_barang_non">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jenis_barang_non">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_barang" class="col-sm-2 col-form-label">QTY</label>
                <div class="col-sm-7">
                    <input type="int" class="form-control" name="qty">
                </div>
            </div>
            <div class="row mb-3">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="satuan_non">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kategori_non">
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
                
                
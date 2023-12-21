
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Pengembalian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('barang/ProsesTambah_pengembalian'); ?>">
            <div class="row mb-3">
                <label for="nama_peminjam" class="col-sm-2 col-form-label">Nama Peminjam</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_peminjam">
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi/dapertement" class="col-sm-2 col-form-label">Divisi/departement</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="divisi/dapertement">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lokasi_cabang" class="col-sm-2 col-form-label">Lokasi/cabang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="lokasi_cabang">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_barang">
                </div>
            </div>
            <div class="row mb-3">
                <label for="qty" class="col-sm-2 col-form-label">Qty</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="qty">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kondisi" class="col-sm-2 col-form-label">Kondisi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kondisi">
                </div>
            </div>
            <div class="row mb-3">
                <label for="paraf" class="col-sm-2 col-form-label">Paraf</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="paraf">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="keterangan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal_peminjaman">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_pengembalian" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal_pengembalian">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kategori">
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
                
                
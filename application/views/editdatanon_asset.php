    <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
            
        <h3>Halaman Edit Data Asset</h3>
        <hr>
        <br>

        <form method="post" action="<?php echo base_url('barang/Proseseditdata_non_asset'); ?>">

        <input type="hidden" name="id_barang_non" value= "<?php echo $barang['id_barang_non']; ?>">
            <div class="row mb-3">
                <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kode_barang_non" required="" value="<?php echo $barang['kode_barang_non']; ?>">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_barang_non" required="" value="<?php echo $barang['nama_barang_non']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="jenis_barang" class="col-sm-2 col-form-label">QTY</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="qty" value="<?php echo $barang['qty']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-7">
                    <select class="form-control" name="satuan_non">
                        <option value="BUAH">BUAH</option>
                        <option value="BUKU">BUKU</option>
                        <option value="BOTOL">BOTOL</option>
                        <option value="TABUNG">TABUNG</option>
                        <option value="KOTAK">KOTAK</option>
                        <option value="UNIT">UNIT</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kategori_non" required="" value="<?php echo $barang['kategori_non']; ?>">
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
    </div>
    </div>
</main>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Permintan Penawaran Harga</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('ppharga/ProsesEditdatappharga'); ?>">

        <input type="hidden" name="id_pph" value= "<?php echo $ppharga['id_pph']; ?>">
            <div class="row mb-3">
                <label for="no_pph" class="col-sm-2 col-form-label">Nomor Permintaan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_pph" required="" value="<?php echo $ppharga['no_pph']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="lampiran" required="" value="<?php echo $ppharga['lampiran']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="perihal" required="" value="<?php echo $ppharga['perihal']; ?>">
                </div>
            </div>
            <div class="row mb-3">
    <label for="id_penyedia" class="col-sm-2 col-form-label">Pilih Supplier</label>
    <div class="col-sm-7">
        <select class="form-control" id="id_penyedia" name="id_penyedia" required>
            <option value="">Pilih Supplier</option>
            <?php foreach ($supplier as $supp): ?>
                <option value="<?= $supp->id_penyedia ?>"><?= $supp->nama_penyedia_eksternal; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" name="email" required="" value="<?php echo $ppharga['email']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="nmr_telp" class="col-sm-2 col-form-label">Nomor Telp</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nmr_telp" required="" value="<?php echo $ppharga['nmr_telp']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="nama_item" class="col-sm-2 col-form-label">Nama Item</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_item" required="" value="<?php echo $ppharga['nama_item']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="spesifikasi" required="" value="<?php echo $ppharga['spesifikasi']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jumlah" required="" value="<?php echo $ppharga['spesifikasi']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jumlah" required="" value="<?php echo $ppharga['jumlah']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="rincian_barang_jasa" class="col-sm-2 col-form-label">Rincian Barang Jasa</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="rincian_barang_jasa" required="" value="<?php echo $ppharga['rincian_barang_jasa']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="daftar_harga" class="col-sm-2 col-form-label">Daftar Harga</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="daftar_harga" required="" value="<?php echo $ppharga['daftar_harga']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pembelian_pembayaran" class="col-sm-2 col-form-label">Pembelian Pembayaran</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="pembelian_pembayaran" required="" value="<?php echo $ppharga['pembelian_pembayaran']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="estimasi_pengiriman" class="col-sm-2 col-form-label">Estimasi Pengiriman</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="estimasi_pengiriman" required="" value="<?php echo $ppharga['estimasi_pengiriman']; ?>">
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
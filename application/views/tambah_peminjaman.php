
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Peminjaman</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('inventory/ProsesTambah_peminjaman'); ?>">
                                <div class="row mb-3">
                                    <label for="id_penyedia" class="col-sm-2 col-form-label">Peminjam</label>
                                    <div class="col-sm-7">
        <select class="form-control" id="nama_peminjam" name="nama_peminjam" required>
            <option value="">Pilih Peminjam</option>
            <?php foreach ($penyerah as $p): ?>
                <option value="<?= $p->nama ?>"><?= $p->nama; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="row mb-3">
    <label for="id_penyedia" class="col-sm-2 col-form-label">Divisi/Departement</label>
    <div class="col-sm-7">
        <select class="form-control" id="penyerah" name="divisi/departement" required>
            <option value="">Pilih Divisi/Departement</option>
           <?php
$uniqueDivisions = array_unique(array_column($penyerah, 'divisi'));
sort($uniqueDivisions);

foreach ($uniqueDivisions as $division): ?>
    <option value="<?= $division ?>"><?= $division; ?></option>
<?php endforeach;
?>

        </select>
    </div>
</div>
            <div class="row mb-3">
                <label for="lokasi/cabang" class="col-sm-2 col-form-label">Lokasi/cabang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="lokasi/cabang">
                </div>
            </div>
              <div class="row mb-3">
                                    <label for="id_penyedia" class="col-sm-2 col-form-label">Kode Barang</label>
                                    <div class="col-sm-7">
        <select class="form-control" id="nama_barang" name="nama_barang" required>
            <option value="">Pilih Barang</option>
            <?php foreach ($barang as $p): ?>
                <option value="<?= $p->kode_barang ?>"><?= $p->kode_barang; ?> - <?= $p->nama_barang; ?></option>
            <?php endforeach; ?>
        </select>
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
                
                
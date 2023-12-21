<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Laporan</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('data_Laporan/ProsesEditdataLaporan'); ?>" enctype="multipart/form-data">

        <input type="hidden" name="id_lpb" value= "<?php echo $lpb['id_lpb']; ?>">
            <div class="row mb-3">
                <label for="tanggal_terima" class="col-sm-2 col-form-label">Tanggal Terima</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal_terima" required="" value="<?php echo $lpb['tanggal_terima']; ?>">
                </div>
            </div>
            <div class="row mb-3">
    <label for="id_penyedia" class="col-sm-2 col-form-label">Penyerah</label>
    <div class="col-sm-7">
        <select class="form-control" id="penyerah" name="penyerah" required>
            <option value="">Pilih Penyerah</option>
            <?php foreach ($penyerah as $p): ?>
                <option value="<?= $p->nama ?>"><?= $p->nama; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
  <div class="row mb-3">
    <label for="id_penyedia" class="col-sm-2 col-form-label">Divisi/Departement Penyerah</label>
    <div class="col-sm-7">
        <select class="form-control" id="penyerah" name="divisi/departement_penyerah" required>
            <option value="">Pilih Divisi/Departement Penyerah</option>
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
    <label for="id_penyedia" class="col-sm-2 col-form-label">Penerima</label>
    <div class="col-sm-7">
        <select class="form-control" id="penerima" name="penerima" required>
            <option value="">Pilih Penerima</option>
            <?php foreach ($penyerah as $p): ?>
                <option value="<?= $p->nama ?>"><?= $p->nama; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="row mb-3">
    <label for="id_penyedia" class="col-sm-2 col-form-label">Divisi/Departement Penerima</label>
    <div class="col-sm-7">
        <select class="form-control" id="penyerah" name="divisi/departement_penerima" required>
            <option value="">Pilih Divisi/Departement Penerima</option>
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
                <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kode_barang" required="" value="<?php echo $lpb['kode_barang']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jumlah" required="" value="<?php echo $lpb['jumlah']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="keterangan" required="" value="<?php echo $lpb['keterangan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ttd_penyerah" class="col-sm-2 col-form-label">TTD Penyerah</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="ttd_penyerah" required="" value="<?php echo $lpb['ttd_penyerah']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="ttd_penerima" class="col-sm-2 col-form-label">TTD Penerima</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="ttd_penerima" required="" value="<?php echo $lpb['ttd_penerima']; ?>">
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
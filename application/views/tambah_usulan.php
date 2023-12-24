
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Usulan</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('usulan/ProsesTambah_usulan'); ?>" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="no_usulan" class="col-sm-2 col-form-label">No Usulan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_usulan" readonly value="<?= $latestUsulanNumber ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal">
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_penyedia" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-7">
                    <select class="form-control" id="kode_barang" name="kode_barang" required>
                        <option value="">Pilih Kode Barang</option>
                           <?php foreach ($barang as $p): ?>
                            <option value="<?= $p->kode_barang ?>"><?= $p->kode_barang; ?> - <?= $p->nama_barang; ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            <div class="row mb-3">
                <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-7">
                     <select class="form-control" name="jenis">
            <option value="--Pilih--">Pilih Jenis</option>
            <option value="Barang">Barang</option>
            <option value="Jasa">Jasa</option>
        </select>
                </div>
            </div>
             <div class="additional-fields">
            <div class="row mb-3">
                <label for="nama_produk&jasa" class="col-sm-2 col-form-label">Nama Produk & Jasa</label>
                    <div class="col-sm-7">
                    <select class="form-control" id="nama_produk&jasa" name="nama_produk&jasa" required>
                        <option value="">Pilih Barang</option>
                            <?php
                            $uniqueDivisions = array_unique(array_column($barang, 'nama_barang'));
                            sort($uniqueDivisions);

                            foreach ($uniqueDivisions as $division): ?>
                                <option value="<?= $division ?>"><?= $division; ?></option>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>
                </div>
            <div class="row mb-3">
                <label for="spesifikasi" class="col-sm-2 col-form-label">Spesifikasi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="spesifikasi">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" name="jumlah">
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_penyedia" class="col-sm-2 col-form-label">Satuan</label>
                    <div class="col-sm-7">
                    <select class="form-control" id="satuan" name="satuan" required>
                        <option value="">Pilih Satuan</option>
                            <?php
                            $uniqueDivisions = array_unique(array_column($barang, 'satuan'));
                            sort($uniqueDivisions);

                            foreach ($uniqueDivisions as $division): ?>
                                <option value="<?= $division ?>"><?= $division; ?></option>
                            <?php endforeach;
                            ?>
                        </select>
                    </div>
                </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-7">
                    <textarea rows="5" cols="" class="form-control" name="keterangan"></textarea>
                </div>
            </div>
            <!-- <div class="row mb-3">
                <label for="penyerah" class="col-sm-2 col-form-label">Penyerah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="penyerah">
                </div>
            </div> -->
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
                <label for="ttd_penerima" class="col-sm-2 col-form-label">Tanda Tangan Penerima</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="ttd_penerima">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ttd_penyerah" class="col-sm-2 col-form-label">Tanda Tangan Penyerah</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="ttd_penyerah">
                </div>
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
                
                

                  <script>
        $(document).ready(function () {
         
        });
    </script>
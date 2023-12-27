<div id="layoutSidenav_content">
                <main>
                    <hr>
                    <div class="container-fluid px-4">
        <h3>Halaman Edit Data BBM</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('data_bbm/ProsesEditDatabbm'); ?>" enctype="multipart/form-data"

        <input type="hidden" name="id_barang" value= "<?php echo $bbm['id_bbm']; ?>">
            <div class="row mb-3">
                <label for="kode_barang" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal" required="" value="<?php echo $bbm['tanggal']; ?>">
                    
                </div>
            </div>
             <div class="row mb-3">
                <label for="id_penyedia" class="col-sm-2 col-form-label">Driver</label>
                <div class="col-sm-7">
                    <select class="form-control" id="penyerah" name="nama" required>
                        <option value="">Pilih Driver</option>
                       <?php
                        $uniqueDivisions = array_unique(array_column($driver, 'nama'));
                        sort($uniqueDivisions);

                        foreach ($uniqueDivisions as $division): ?>
                            <option value="<?= $division ?>"><?= $division; ?></option>
                        <?php endforeach;
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_barang" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="keterangan" required="" value="<?php echo $bbm['keterangan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis BBM</label>
                <div class="col-sm-7">
                   <select class="form-control" name="Jenis_bbm">
                   <option value="pilih"> Pilih Jenis BBM</option>
                   <option value="Dexlite">Dexlite</option>
                   <option value="Pertamina Dex">Pertamina Dex</option>
                   <option value="Pertamax">Pertamax</option>
                   <option value="Pertalite">Pertalite</option>
                   </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_rangka" class="col-sm-2 col-form-label">Harga BBM</label>
                <div class="col-sm-7">
                <div class="input-group">
                <span class="input-group-text">Rp.</span>
                <input type="text" class="form-control" name="harga_bbm" value="<?php echo $bbm['harga_bbm']; ?>">
                </div>
                </div>
            </div>
            <div class="row mb-3">
                 <label for="kategori" class="col-sm-2 col-form-label">Jumlah Harga BBM</label>
                <div class="col-sm-7">
                    <div class="input-group">
                <span class="input-group-text">Rp.</span>
                <input type="text" class="form-control" name="jumlah_harga_bbm" value="<?php echo $bbm['jumlah_harga_bbm']; ?>">
                </div>
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
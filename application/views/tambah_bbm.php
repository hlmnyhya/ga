
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data BBM</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('bbm/ProsesTambah_bbm'); ?>">
            <div class="row mb-3">
                <label for="no_lambung" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal">
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
                <label for="merk" class="col-sm-2 col-form-label">No Lambung</label>
                <div class="col-sm-7">
                    <select class="form-control" name="no_lambung">
                        <option selected disabled>--Pilih--</option>
                        <?php 
                        foreach ($ken as $key) {
                            ?>
                            <option value="<?php echo $key['no_lambung'] ?>"><?php echo $key['no_lambung'] ?></option>
                            <?php
                        }
                         ?>
                        
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="keterangan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="model" class="col-sm-2 col-form-label">Jenis BBM</label>
                <div class="col-sm-7">
                    <select class="form-control" name="Jenis_bbm">
            <option value="pilih">--Pilih--</option>
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
                    <input type="text" class="form-control" name="harga_bbm">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_mesin" class="col-sm-2 col-form-label">Jumlah Harga BBM</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jumlah_harga_bbm">
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
                
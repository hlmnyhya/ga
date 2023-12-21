<div id="layoutSidenav_content">
                <main>
                    <hr>
                    <div class="container-fluid px-4">
        <h3>Halaman Edit Data Loogbok</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('data_logbok/ProsesEditDataloogbok'); ?>">

        <input type="hidden" name="id_loogbok" value= "<?php echo $loogbok['id_loogbok']; ?>">
            <div class="row mb-3">
                <label for="kode_barang" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal" required="" value="<?php echo $loogbok['tanggal']; ?>">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="waktu_mulai" class="col-sm-2 col-form-label">Waktu Mulai</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="waktu_mulai" required="" value="<?php echo $loogbok['waktu_mulai']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="waktu_selesai" class="col-sm-2 col-form-label">Waktu Selesai</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="waktu_selesai" required="" value="<?php echo $loogbok['waktu_selesai']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="tujuan" required="" value="<?php echo $loogbok['tujuan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nopol" class="col-sm-2 col-form-label">Nopol</label>
                <div class="col-sm-7">
                   <select class="form-control" name="nopol">
                        <option selected="" disabled="">--Pilih--</option>
                        <?php
                        foreach ($data as $key) {
                            # code...
                            ?>
                            <option><?php echo $key['License_Plates'] ?></option>

                            <?php
                        }
                        ?>
                               
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="km_awal" class="col-sm-2 col-form-label">KM Awal</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="harga_bbm" required="" value="<?php echo $loogbok['km_awal']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="km_akhir" class="col-sm-2 col-form-label">KM Akhir</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="km_akhir" required="" value="<?php echo $loogbok['km_akhir']; ?>">
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
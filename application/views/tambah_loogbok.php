
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Loogbok Harian</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('loogbok/ProsesTambah_loogbok'); ?>" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal">
                </div>
            </div>
            <div class="row mb-3">
                <label for="waktu_mulai" class="col-sm-2 col-form-label">Waktu Mulai</label>
                <div class="col-sm-7">
                    <input type="time" class="form-control" name="waktu_mulai">
                </div>
            </div>
            <div class="row mb-3">
                <label for="waktu_selesai" class="col-sm-2 col-form-label">Waktu Selesai</label>
                <div class="col-sm-7">
                   <input type="time" class="form-control" name="waktu_selesai">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="tujuan">
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
                <label for="nopol" class="col-sm-2 col-form-label">Nopol</label>
                <div class="col-sm-7">
                    <!-- <input type="text" class="form-control" name="nopol"> -->
                    <select class="form-control" name="nopol">
                        <option selected="" disabled=""> Pilih Nopol</option>
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
                    <div class="input-group">
                      <input type="text" class="form-control" name="km_awal">
                      <span class="input-group-text">KM</span>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="km_akhir" class="col-sm-2 col-form-label">KM Akhirl</label>
                <div class="col-sm-7">
                    <div class="input-group">
                        <input type="text" class="form-control" name="km_akhir">
                        <span class="input-group-text">KM</span>
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
                
                
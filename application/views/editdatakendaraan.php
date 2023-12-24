<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Kendaraan</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('kendaraan/ProsesEditdatakendaraan'); ?>" enctype="multipart/form-data">

        <input type="hidden" name="id_mobil" value= "<?php echo $kendaraan['id_mobil']; ?>">
            <div class="row mb-3">
                <label for="id_mobil" class="col-sm-2 col-form-label">Id Mobil</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="id_mobil" required="" value="<?php echo $kendaraan['id_mobil']; ?>">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_lambung" class="col-sm-2 col-form-label">No Lambung</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_lambung" required="" value="<?php echo $kendaraan['no_lambung']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="merk" required="" value="<?php echo $kendaraan['merk']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="model" class="col-sm-2 col-form-label">Model</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="model" required="" value="<?php echo $kendaraan['model']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_rangka" class="col-sm-2 col-form-label">No Rangka</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_rangka" required="" value="<?php echo $kendaraan['no_rangka']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="no_mesin" class="col-sm-2 col-form-label">No Mesin</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_mesin" required="" value="<?php echo $kendaraan['no_mesin']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Tgl_STNK/SKPD" class="col-sm-2 col-form-label">Tgl_STNK/SKPD</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="Tgl_STNK/SKPD" required="" value="<?php echo $kendaraan['Tgl_STNK/SKPD']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="color" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="color" required="" value="<?php echo $kendaraan['color']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="License_Plates" class="col-sm-2 col-form-label">License Plates</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="License_Plates" required="" value="<?php echo $kendaraan['License_Plates']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="photo_unit" class="col-sm-2 col-form-label">photo unit</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="photo_unit" required="" value="<?php echo $kendaraan['photo_unit']; ?>">
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
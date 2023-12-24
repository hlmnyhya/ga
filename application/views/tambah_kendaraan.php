
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Kendaraan</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('kendaraan/ProsesTambah_kendaraan'); ?>" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="no_lambung" class="col-sm-2 col-form-label">No Lambung</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_lambung">
                </div>
            </div>
            <div class="row mb-3">
                <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="merk">
                </div>
            </div>
            <div class="row mb-3">
                <label for="model" class="col-sm-2 col-form-label">Model</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="model">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_rangka" class="col-sm-2 col-form-label">No Rangka</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_rangka">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_mesin" class="col-sm-2 col-form-label">No Mesin</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_mesin">
                </div>
            </div>
            <div class="row mb-3">
                <label for="Tgl_STNK/SKPD" class="col-sm-2 col-form-label">Tgl STNK/SKPD</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="Tgl_STNK/SKPD">
                </div>
            </div>
            <div class="row mb-3">
                <label for="color" class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="color">
                </div>
            </div>
            <div class="row mb-3">
                <label for="License_Plates" class="col-sm-2 col-form-label">License Plates</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="License_Plates">
                </div>
            </div>
            <div class="row mb-3">
                <label for="photo_unit" class="col-sm-2 col-form-label">Photo Unit</label>
                <div class="col-sm-7">
                    <input type="file" class="form-control" name="photo_unit">
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
                
                
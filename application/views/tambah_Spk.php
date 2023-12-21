
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data SPK</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('Spk/ProsesTambah_Spk'); ?>">
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nomor_spk" class="col-sm-2 col-form-label">Nomor SPK</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nomor_spk">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama_vendor" class="col-sm-2 col-form-label">Nama Vendor</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_vendor">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat_vendor" class="col-sm-2 col-form-label">Alamat Vendor</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="alamat_vendor">
                </div>
            </div>
            <div class="row mb-3">
                <label for="kebutuhan" class="col-sm-2 col-form-label">Kebutuhan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="kebutuhan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="rincian_biaya" class="col-sm-2 col-form-label">Rincian Biaya</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="rincian_biaya">
                </div>
            </div>
            <div class="row mb-3">
                <label for="cara_pembayaran" class="col-sm-2 col-form-label">Cara Pembayaran</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="cara_pembayaran">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jangka_waktu" class="col-sm-2 col-form-label">Jangka Waktu</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jangka_waktu">
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
                
                
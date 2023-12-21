
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Laporan Penerima Barang</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('Laporan/ProsesTambah_Laporan'); ?>" enctype="multipart/form-data">
            <div class="row mb-3">
                <label for="data_usulan" class="col-sm-2 col-form-label">Data Usulan</label>
                <div class="col-sm-7">
                    <select class="form-control" name="data_usulan">
                        <option selected disabled>--Pilih--</option>
                        <?php 
                        foreach ($u as $key) {
                            ?>
                            <option value="<?php echo $key['no_usulan'] ?>"><?php echo $key['no_usulan'] ?></option>
                            <?php
                        }
                         ?>
                        
                    </select>
                </div>
            </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal_terima" class="col-sm-2 col-form-label">Tanggal Penerima</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="tanggal_terima">
                </div>
            </div>
            <div class="row mb-3">
                <label for="penyerah" class="col-sm-2 col-form-label">Penyerah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="penyerah">
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi/departement_penyerah" class="col-sm-2 col-form-label">Divisi/Departement Penyerah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="divisi/departement_penyerah">
                </div>
            </div>
            <div class="row mb-3">
                <label for="penerima" class="col-sm-2 col-form-label">Penerima</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="penerima">
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi/departement_penerima" class="col-sm-2 col-form-label">Divisi/Departement Penerima</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="divisi/departement_penerima">
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="deskripsi">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="jumlah">
                </div>
            </div>
            <div class="row mb-3">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="keterangan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ttd_penyerah" class="col-sm-2 col-form-label">Tanda Tangan Penyerah</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="ttd_penyerah">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ttd_penerima" class="col-sm-2 col-form-label">Tanda Tangan Penerima</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="ttd_penerima">
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
                
                
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Purchase Order</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                             <form method="post" action="<?php echo base_url('purchase_order/ProsesTambah_purchase_order'); ?>">
            <div class="row mb-3">
                <label for="id_po" class="col-sm-2 col-form-label">Id Po</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="id_po">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_usulan" class="col-sm-2 col-form-label">No Usulan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_usulan">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="tell" class="form-control" name="tanggal">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_po" class="col-sm-2 col-form-label">No Po</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" name="no_po">
                </div>
            </div>
            <div class="row mb-3">
                <label for="qou.no" class="col-sm-2 col-form-label">Qou.No</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="qou.no">
                </div>
            </div>
            <div class="row mb-3">
                <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="supplier">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat_supp" class="col-sm-2 col-form-label">Alamat Supp</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="alamat_supp">
                </div>
            </div>
             <div class="row mb-3">
                <label for="ATTN" class="col-sm-2 col-form-label">ATTN</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="ATTN">
                </div>
            </div>
              </div>
             <div class="row mb-3">
                <label for="e-mail_supp" class="col-sm-2 col-form-label">E-Mail Supp</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="e-mail_supp">
                </div>
                  </div>
             <div class="row mb-3">
                <label for="no_telp_supp" class="col-sm-2 col-form-label">No Telp Supp</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="no_telp_supp">
                </div>
                  </div>
             <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="nama">
                </div>
                  </div>
             <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" name="deskripsi">
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
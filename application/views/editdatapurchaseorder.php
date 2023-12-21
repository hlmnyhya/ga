<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

        <h3>Halaman Edit Data Purchase Order</h3>
        <hr>
        <br>
        <form method="post" action="<?php echo base_url('data_purchase_order/ProsesEditDatapurchaseorder'); ?>">

        <input type="hidden" name="id_po" value= "<?php echo $purchase_order['id_po']; ?>">
            <div class="row mb-3">
                <label for="id_po" class="col-sm-2 col-form-label">Id Po</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="id_po" required="" value="<?php echo $purchase_order['id_po']; ?>">
                    
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_usulan" class="col-sm-2 col-form-label">No Usulan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_usulan" required="" value="<?php echo $purchase_order['no_usulan']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="tanggal" required="" value="<?php echo $purchase_order['tanggal']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_po" class="col-sm-2 col-form-label">No Po</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_po" required="" value="<?php echo $purchase_order['no_po']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="qou.no" class="col-sm-2 col-form-label">Qou.no</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="qou.no" required="" value="<?php echo $purchase_order['qou.no']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="supplier" required="" value="<?php echo $purchase_order['supplier']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="alamat_supp" class="col-sm-2 col-form-label">Alamat Supp</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="alamat_supp" required="" value="<?php echo $purchase_order['alamat_supp']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ATTN" class="col-sm-2 col-form-label">ATTN</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="ATTN" required="" value="<?php echo $purchase_order['ATTN']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="e-mail_supp" class="col-sm-2 col-form-label">E-Mail supp</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="e-mail_supp" required="" value="<?php echo $purchase_order['e-mail_supp']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="no_telp_supp" class="col-sm-2 col-form-label">No Telp Sup</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="no_telp_supp" required="" value="<?php echo $purchase_order['no_telp_supp']; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama" required="" value="<?php echo $purchase_order['nama']; ?>">
                </div>
            </div>
             <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="deskripsi" required="" value="<?php echo $purchase_order['deskripsi']; ?>">
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
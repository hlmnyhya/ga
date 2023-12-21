
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Permintaan Penawaran Harga</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                               
                            </div>
                            <div class="card-body">
                                <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                     <br>
                                 <a href="<?php echo base_url('ppharga/tambah_ppharga') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                    <?php
                                }
                                ?>
                                
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Permintaan</th>
                                            <th>Lampiran</th>
                                            <th>Perihal</th>
                                            <th>Kepada</th>
                                            <th>email</th>
                                            <th>Nomor Telp</th>
                                            <th>Nama Item</th>
                                            <th>Spesifikasi</th>
                                            <th>Jumlah</th>
                                            <th>Rincian Barang Jasa</th>
                                            <th>Daftar Harga</th>
                                            <th>Pembelian Pembyaran</th>
                                            <th>Estimasi Pengiriman</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $pph) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $pph['no_pph'] ?></td>
                                            <td><?php echo $pph['lampiran'] ?></td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['perihal']) OR NULL) {
                                                    echo $pph['perihal'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="perihal" readonly required value="' . $pph['perihal'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['kepada_vendor']) OR NULL) {
                                                    echo $pph['kepada_vendor'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="id_penyedia" readonly  required value="' . $pph['kepada_vendor'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['email']) OR NULL) {
                                                    echo $pph['email'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="email" readonly  required value="' . $pph['email'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['nmr_telp']) OR NULL) {
                                                    echo $pph['nmr_telp'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="nmr_telp" readonly  required value="' . $pph['nmr_telp'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['nama_item']) OR NULL) {
                                                    echo $pph['nama_item'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="nama_item" readonly  required value="' . $pph['nama_item'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['spesifikasi']) OR NULL) {
                                                    echo $pph['spesifikasi'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="spesifikasi" readonly  required value="' . $pph['spesifikasi'] . '">';
                                                }
                                                ?>
                                            </td>
                                          <td>
                    <?php if ($pph['jumlah'] !== NULL) : ?>
                        <?php echo $pph['jumlah']; ?>
                        <?php else : ?>
                            <input type="text" class="form-control" name="jumlah" readonly  required value="<?= $pph['jumlah']; ?>">
                            <?php endif; ?>
                </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['rincian_barang_jasa']) OR NULL) {
                                                    echo $pph['rincian_barang_jasa'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="rincian_barang_jasa"  readonly required value="' . $pph['rincian_barang_jasa'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['daftar_harga']) OR NULL) {
                                                    echo $pph['daftar_harga'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="daftar_harga" readonly  required value="' . $pph['daftar_harga'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['pembelian_pembayaran']) OR NULL) {
                                                    echo $pph['pembelian_pembayaran'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="pembelian_pembayaran"  readonly required value="' . $pph['pembelian_pembayaran'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                if (!empty($pph['estimasi_pengiriman']) OR NULL) {
                                                    echo $pph['estimasi_pengiriman'];
                                                } else {
                                                    echo '<input type="text" class="form-control" name="estimasi_pengiriman"  readonly required value="' . $pph['estimasi_pengiriman'] . '">';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                          <?php
if (!empty($pph['estimasi_pengiriman']) || $pph['estimasi_pengiriman'] === '0') {
    // echo '<a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal" data-id="' . $pph['id_pph'] . '">Buat PO</a>';
} else {
    echo '<a href="' . base_url() . 'ppharga/updatepenawaran/' . $pph['id_pph'] . '" class="btn btn-success btn-sm">Simpan</a>';
}
?>

                                            <a href="<?php echo base_url() ?>ppharga/editdatappharga/<?php echo $pph['id_pph']; ?>" class="btn btn-primary btn-sm">Edit</                                    a>
                                            <a href="<?php echo base_url() ?>ppharga/hapusdatappharga/<?php echo $pph['id_pph']; ?>" class="btn btn-danger                                      btn-sm">Hapus</a>
                                            </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </main>
                
                <!-- Modal -->
<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Apakah anda yakin ingin membuat PO?</h6>
       <form action="<?= base_url('ppharga/tambah_po_aksi/' . $pph['id_pph']) ?>" method="POST">
    <div class="form-group">
        <label for="no_usulan">No Usulan</label>
        <input type="text" class="form-control" name="no_usulan" value="<?=  $pph['id_pph']?>" required>
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi" required>
    </div>
    <div class="form-group">
        <label for="qty">Qty</label>
        <input type="text" class="form-control" name="qty" required>
    </div>
    <div class="form-group">
        <label for="supplier">Supplier</label>
        <input type="text" class="form-control" name="supplier" required>
    </div>
    <div class="form-group">
        <label for="ATTN">ATTN</label>
        <input type="text" class="form-control" name="ATTN" required>
    </div>
    <div class="form-group">
        <label for="alamat_supp">Alamat Supplier</label>
        <input type="text" class="form-control" name="alamat_supp" required>
    </div>
    <div class="form-group">
        <label for="e-mail_supp">E-mail Supplier</label>
        <input type="text" class="form-control" name="e-mail_supp" required>
    </div>
    <div class="form-group">
        <label for="no_telp_supp">No Telp Supplier</label>
        <input type="text" class="form-control" name="no_telp_supp" required>
    </div>
    
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
    </div>
  </div>
</div> -->

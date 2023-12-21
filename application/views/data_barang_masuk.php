
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Barang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
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
                                 <a href="<?php echo base_url('barang/tambah_masuk') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                </button><a><br><br>
                                  <form method="post" action="<?= base_url('laporan_barang/masuk')?>">
                                                            <button type="submit" name="export_excel" class="btn btn-success mb-3" value="Export Excel">
                                    <i class="fa fa-file"></i> EXCEL
                                </button><br>
                            </form>
                                     <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>QTY</th>
                                            <th>Satuan</th>
                                            <th>Kategori</th>
                                             <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                            <th>Aksi</th>
                                             <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $b) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $b['kode_barang'] ?></td>
                                            <td><?php echo $b['nama_barang'] ?></td> 
                                            <td><?php echo $b['jenis_barang'] ?></td>
                                            <td><?php echo $b['qty'] ?></td> 
                                            <td><?php echo $b['satuan'] ?></td>
                                            <td><?php echo $b['kategori'] ?></td>
                                            <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                            <td>
                                    <a href="<?php echo base_url() ?>barang/Editdatabarang/<?php echo $b['kode_barang']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                    <a href="<?php echo base_url() ?>barang/Hapusdatabarang/<?php echo $b['kode_barang']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
                                </td>
                                 <?php } ?>
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
                
                

    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Usulan</h1>
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
                                 <a href="<?php echo base_url('usulan/tambah_usulan') ?>">
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
                                            <th>No Usulan</th>
                                            <th>Tanggal</th>
                                            <th>Kode Barang</th>
                                            <th>Jenis</th>
                                            <th>Nama Produk & Jasa</th>
                                            <th>Spesifikasi</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Keterangan</th>
                                            <th>Penyerah</th>
                                            <th>Divisi/Departement penyerah</th>
                                            <th>Penerima</th>
                                            <th>Divisi/Departement penerima</th>
                                            <th>Tanda Tangan Penerima</th>
                                            <th>Tanda Tangan Penyerah</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $u) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $u['no_usulan'] ?></td>
                                            <td><?php echo $u['tanggal'] ?></td>
                                            <td><?php echo $u['kode_barang'] ?></td>
                                            <td><?php echo $u['jenis'] ?></td>
                                            <td><?php echo $u['nama_produk&jasa'] ?></td>
                                            <td><?php echo $u['spesifikasi'] ?></td>
                                            <td><?php echo $u['jumlah'] ?></td>
                                            <td><?php echo $u['satuan'] ?></td>
                                            <td><?php echo $u['keterangan'] ?></td>
                                            <td><?php echo $u['penyerah'] ?></td>
                                            <td><?php echo $u['divisi/departement_penyerah'] ?></td>
                                            <td><?php echo $u['penerima'] ?></td>
                                            <td><?php echo $u['divisi/departement_penerima'] ?></td>
                                            <td><img src="<?php echo base_url('./uploads/ttd/'.$u['ttd_penerima']); ?>" width="100px" height="100px" alt="ttd"></td>
                                            <td><img src="<?php echo base_url('./uploads/ttd/'.$u['ttd_penyerah']); ?>" width="100px" height="100px" alt="ttd"></td>
                                            <td><?php echo $u['status'] ?></td>
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
                
                
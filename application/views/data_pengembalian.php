
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Pengembalian</h1>
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
                                if ($this->session->userdata('level')=='admin') {
                                    ?>
                                 <br>
                                 <a href="<?php echo base_url('inventory/tambah_pengembalian') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                    <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjaman</th>
                                            <th>Divisi/Departement</th>
                                            <th>Lokasi/Cabang</th>
                                            <th>Nama Barang</th>
                                            <th>QTY</th>
                                            <th>Kondisi</th>
                                            <th>Paraf</th>
                                            <th>Keterangan</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $p) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $p['nama_peminjam'] ?></td>
                                            <td><?php echo $p['divisi/departement'] ?></td> 
                                            <td><?php echo $p['lokasi/cabang'] ?></td>
                                            <td><?php echo $p['nama_barang'] ?></td>
                                            <td><?php echo $p['qty'] ?></td>
                                            <td><?php echo $p['kondisi'] ?></td>
                                            <td><?php echo $p['paraf'] ?></td>
                                            <td><?php echo $p['keterangan'] ?></td>
                                            <td><?php echo $p['tanggal_pengembalian'] ?></td>
                                            <td><?php echo $p['status'] ?></td>
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
                
                
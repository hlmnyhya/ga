
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Laporan Penerima Barang</h1>
                        <ol class="breadcrumb mb-4">
                        </ol>
                        <div class="row">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                               
                            </div>
                            <div class="card-body">

                                
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Data Usulan</th>
                                            <th>Tanggal Terima</th>
                                            <th>Penyerah</th>
                                            <th>Divisi/Departement Penyerah</th>
                                            <th>Penerima</th>
                                            <th>Divisi/Departement Penerima</th>
                                            <th>Kode Barang</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Tanda Tangan Penyerah</th>
                                            <th>Tanda Tangan Penerima</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $lpb) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $lpb['data_usulan'] ?></td>
                                            <td><?php echo $lpb['tanggal_terima'] ?></td>
                                            <td><?php echo $lpb['penyerah'] ?></td>
                                            <td><?php echo $lpb['divisi/departement_penyerah'] ?></td>
                                            <td><?php echo $lpb['penerima'] ?></td>
                                            <td><?php echo $lpb['divisi/departement_penerima'] ?></td>
                                            <td><?php echo $lpb['kode_barang'] ?></td>
                                            <td><?php echo $lpb['jumlah'] ?></td>
                                            <td><?php echo $lpb['keterangan'] ?></td>
                                            <td><img src="<?php echo base_url('./uploads/ttd/'.$lpb['ttd_penerima']); ?>" width="100px" height="100px" alt="ttd"></td>
                                            <td><img src="<?php echo base_url('./uploads/ttd/'.$lpb['ttd_penyerah']); ?>" width="100px" height="100px" alt="ttd"></td>
                                            <td>
                                                <?php
                                                if ($lpb['status']=='Diproses') {
                                                ?>

                                             <a href="<?php echo base_url() ?>Laporan/terima/<?php echo $lpb['id_usulan']; ?>" class="btn btn-success btn-sm  ">Terima</a>
                                             <a href="<?php echo base_url() ?>Laporan/tolak/<?php echo $lpb['id_usulan']; ?>" class="btn btn-danger btn-sm ">Tolak</a>

                                                    <?php
                                                }else{
                                                    ?>
                                                    <?php echo $lpb['status']?>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                             <a href="<?php echo base_url() ?>Laporan/editdataLaporan/<?php echo $lpb['id_lpb']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                             <a href="<?php echo base_url() ?>Laporan/hapusdataLaporan/<?php echo $lpb['id_lpb']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                
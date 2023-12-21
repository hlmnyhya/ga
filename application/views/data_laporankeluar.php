
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Laporan Keluar</h1>
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
                                            <th>Deskripsi</th>
                                            <th>Jumlah</th>
                                            <th>Keterangan</th>
                                            <th>Tanda Tangan Penyerah</th>
                                            <th>Tanda Tangan Penerima</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $lk) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $lk['data_usulan'] ?></td>
                                            <td><?php echo $lk['tanggal_terima'] ?></td>
                                            <td><?php echo $lk['penyerah'] ?></td>
                                            <td><?php echo $lk['divisi/departement_penyerah'] ?></td>
                                            <td><?php echo $lk['penerima'] ?></td>
                                            <td><?php echo $lk['divisi/departement_penerima'] ?></td>
                                            <td><?php echo $lk['deskripsi'] ?></td>
                                            <td><?php echo $lk['jumlah'] ?></td>
                                            <td><?php echo $lk['keterangan'] ?></td>
                                            <td><?php echo $lk['ttd_penyerah'] ?></td>
                                            <td><?php echo $lk['ttd_penerima'] ?></td>
                                            <td>
                                                <?php
                                                if ($lk['status']=='Diproses') {
                                                ?>

                                             <a href="<?php echo base_url() ?>Laporan/terima/<?php echo $lpb['id_usulan']; ?>" class="btn btn-success btn-sm  ">Terima</a>
                                             <a href="<?php echo base_url() ?>Laporan/tolak/<?php echo $lpb['id_usulan']; ?>" class="btn btn-danger btn-sm ">Tolak</a>

                                                    <?php
                                                }else{
                                                    ?>
                                                    <?php echo $lk['status']?>
                                                    <?php
                                                }
                                                ?>
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
                
                
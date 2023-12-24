
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">SPK</h1>
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
                                 <a href="<?php echo base_url('Spk/tambah_Spk') ?>">
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
                                            <th>Tanggal</th>
                                            <th>Nomor Spk</th>
                                            <th>Nama Vendor</th>
                                            <th>Alamat Vendor</th>
                                            <th>Kebutuhan</th>
                                            <th>Rincian Biaya</th>
                                            <th>Cara Pembayaran</th>
                                            <th>Jangka Waktu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $Sp) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $Sp['tanggal'] ?></td>
                                            <td><?php echo $Sp['nomor_spk'] ?></td>
                                            <td><?php echo $Sp['nama_vendor'] ?></td>
                                            <td><?php echo $Sp['alamat_vendor'] ?></td>
                                            <td><?php echo $Sp['kebutuhan'] ?></td>
                                            <td><?php echo $Sp['rincian_biaya'] ?></td>
                                            <td><?php echo $Sp['cara_pembayaran'] ?></td>
                                            <td><?php echo $Sp['jangka_waktu'] ?></td>
                                            <td>
                                             <a href="<?php echo base_url() ?>Spk/editdataSpk/<?php echo $Sp['id_spk']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                             <a href="<?php echo base_url() ?>Spk/hapusdataSpk/<?php echo $Sp['id_spk']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
                                             <a href="<?php echo base_url() ?>Spk/berita_acara_spk/<?php echo $Sp['id_spk']; ?>" class="btn btn-success btn-sm "><i class="fa fa-file"></i> Cetak Berita Acara</a>
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
                
                
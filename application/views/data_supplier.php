
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Supplier</h1>
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
                                 <a href="<?php echo base_url('supplier/tambah_supplier') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                    <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penyedia Eksternal</th>
                                            <th>Alamat</th>
                                            <th>Contact Person</th>
                                            <th>Email</th>
                                            <th>No Telp</th>
                                            <th>Bidang Usaha</th>
                                            <th>Keterangan Terdaftar</th>
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
                                        foreach ($data as $s) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $s['nama_penyedia_eksternal'] ?></td>
                                            <td><?php echo $s['alamat'] ?></td> 
                                            <td><?php echo $s['contact_person'] ?></td>
                                            <td><?php echo $s['e-mail'] ?></td>
                                            <td><?php echo $s['no_telp'] ?></td>
                                            <td><?php echo $s['bidang_usaha'] ?></td>
                                            <td><?php echo $s['keterangan_terdaftar'] ?></td>
                                            <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                            <td>
                                    <a href="<?php echo base_url() ?>supplier/editdatasupplier/<?php echo $s['id_penyedia']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                    <a href="<?php echo base_url() ?>supplier/Hapusdatasupplier/<?php echo $s['id_penyedia']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                
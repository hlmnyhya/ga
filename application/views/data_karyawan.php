
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Karyawan</h1>
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
                                 <a href="<?php echo base_url('karyawan/tambah_karyawan') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Karyawan</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Email</th>
                                            <th>Divisi</th>
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
                                        foreach ($data as $k) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $k['no_karyawan'] ?></td>
                                            <td><?php echo $k['nama'] ?></td> 
                                            <td><?php echo $k['jabatan'] ?></td>
                                            <td><?php echo $k['email'] ?></td>
                                            <td><?php echo $k['divisi'] ?></td>
                                            <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                            <td>
                                    <a href="<?php echo base_url() ?>karyawan/editdatakaryawan/<?php echo $k['id_karyawan']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                    <a href="<?php echo base_url() ?>karyawan/hapusdatakaryawan/<?php echo $k['id_karyawan']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                
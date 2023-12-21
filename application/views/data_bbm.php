 
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data BBM</h1>
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
                                  $level = $this->session->userdata('level');
                                  if ($level == 'karyawan' || $level == 'Driver') {
                                 ?>
                                 <br>
                                 <a href="<?php echo base_url('bbm/tambah_bbm') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                     <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Penanggung Jawab</th>
                                            <th>No Lambung</th>
                                            <th>Keterangan</th>
                                            <th>Jenis BBM</th>
                                            <th>Harga BBM</th>
                                            <th>Jumlah Harga BBM</th>
                                             <?php
                                            $level = $this->session->userdata('level');
                                              if ($level == 'karyawan' || $level == 'Driver') {
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
                                            <td><?php echo $b['tanggal'] ?></td>
                                            <td><?php echo $b['nama'] ?></td>
                                            <td><?php echo $b['no_lambung'] ?></td>
                                            <td><?php echo $b['keterangan'] ?></td> 
                                            <td><?php echo $b['Jenis_bbm'] ?></td>
                                            <td><?php echo $b['harga_bbm'] ?></td>
                                            <td><?php echo $b['jumlah_harga_bbm'] ?></td>
                                             <?php
                                              $level = $this->session->userdata('level');
                                              if ($level == 'karyawan' || $level == 'Driver') {
                                             ?>
                                            <td>
                                    <a href="<?php echo base_url() ?>bbm/editdatabbm/<?php echo $b['id_bbm']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                    <a href="<?php echo base_url() ?>bbm/hapusdatabbm/<?php echo $b['id_bbm']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                
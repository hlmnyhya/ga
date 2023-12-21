
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Kendaraan</h1>
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
                                 <a href="<?php echo base_url('kendaraan/tambah_kendaraan') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                    <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Lambung</th>
                                            <th>Merk</th>
                                            <th>Model</th>
                                            <th>No Rangka</th>
                                            <th>No Mesin</th>
                                            <th>Tgl STNK/SKPD</th>
                                            <th>Color</th>
                                            <th>License Plates</th>
                                            <th>Photo Unit</th>
                                            <th>File STNK/SKPD</th>
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
                                        foreach ($data as $ken) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $ken['no_lambung'] ?></td>
                                            <td><?php echo $ken['merk'] ?></td> 
                                            <td><?php echo $ken['model'] ?></td>
                                            <td><?php echo $ken['no_rangka'] ?></td>
                                            <td><?php echo $ken['no_mesin'] ?></td>
                                            <td><?php echo $ken['Tgl_STNK/SKPD'] ?></td>
                                            <td><?php echo $ken['color'] ?></td>
                                            <td><?php echo $ken['License_Plates'] ?></td>
                                            <td><?php echo $ken['photo_unit'] ?></td>
                                            <td><?php echo $ken['File_STNK/SKPD'] ?></td>
                                             <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                            <td>
                                             <a href="<?php echo base_url() ?>kendaraan/editdatakendaraan/<?php echo $ken['id_mobil']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                             <a href="<?php echo base_url() ?>kendaraan/hapusdatakendaraan/<?php echo $ken['id_mobil']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                
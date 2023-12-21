
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Loogbok Harian</h1>
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
                                if ($this->session->userdata('level')=='Driver') {
                                    ?>
                                 <br>
                                 <a href="<?php echo base_url('loogbok/tambah_loogbok') ?>">
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
                                            <th>Waktu Mulai</th>
                                            <th>Waktu Selesai</th>
                                            <th>Tujuan</th>
                                            <th>Nopol</th>
                                            <th>KM Awal</th>
                                            <th>KM Akhir</th>
                                            <?php
                                if ($this->session->userdata('level')=='Driver') {
                                    ?>
                                            <th>Aksi</th>
                                        <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $l) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $l['tanggal'] ?></td>
                                            <td><?php echo $l['nama'] ?></td>
                                            <td><?php echo $l['waktu_mulai'] ?></td> 
                                            <td><?php echo $l['waktu_selesai'] ?></td>
                                            <td><?php echo $l['tujuan'] ?></td>
                                            <td><?php echo $l['nopol'] ?></td>
                                            <td><?php echo $l['km_awal'] ?></td>
                                            <td><?php echo $l['km_akhir'] ?></td>
                                              <?php
                                if ($this->session->userdata('level')=='Driver') {
                                    ?>
                                            <td>
                                    <a href="<?php echo base_url() ?>loogbok/editdataloogbok/<?php echo $l['id_loogbok']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                    <a href="<?php echo base_url() ?>loogbok/hapusdataloogbok/<?php echo $l['id_loogbok']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                

    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Barang Keluar</h1>
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
                                 <br>
                                 <a href="<?php echo base_url('barang/tambah_keluar') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                                                            </button><a><br><br>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>Satuan</th>
                                            <th>Kategori</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $b) {
                                            ?>
                                            <tr>  
                                            <td><?php echo $no++ ?></td>
                                 1` 222222222222><?php echo $b['kode_barang'] ?></td>
                                            <td><?php echo $b['nama_barang'] ?></td> 
                                            <td><?php echo $b['jenis_barang'] ?></td>
                                            <td><?php echo $b['satuan'] ?></td>
                                            <td><?php echo $b['kategori'] ?></td>
                                             <td>
                                    <a href="<?php echo base_url() ?>barang_keluar/Editdata/<?php echo $b['id_barang']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                    <a href="<?php echo base_url() ?>barang_keluar/Hapusdata/<?php echo $b['id_barang']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
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
                
                
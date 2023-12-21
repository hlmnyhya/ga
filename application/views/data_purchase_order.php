<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Purchase Order</h1>
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
                                 <a href="<?php echo base_url('purchase_order/tambah_purchase_order') ?>">
                                <button class="btn btn-primary">
                                    <i class="fa fa-plus"></i>
                            
                                </button><a><br><br>
                                     <?php } ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <tr></tr>
                                            <th>Id Po</th>
                                            <th>No Usulan</th>
                                            <th>Tanggal</th>
                                            <th>No Po</th>
                                            <th>Qou No</th>
                                            <th>Supplier</th>
                                            <th>Alamat Supp</th>
                                            <th>ATTN</th>
                                            <th>E-Mail Supp</th>
                                            <th>No Telp Supp</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                    <th>Aksi</th>

                                    <?php
                                        }
                                    ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $pur) {
                                            ?>
                                            <tr>
                                            <td><?php echo $pur['id_po'] ?></td>
                                            <td><?php echo $pur['no_usulan'] ?></td> 
                                            <td><?php echo $pur['tanggal'] ?></td>
                                            <td><?php echo $pur['no_po'] ?></td>
                                            <td><?php echo $pur['qou.no'] ?></td>
                                            <td><?php echo $pur['supplier'] ?></td>
                                            <td><?php echo $pur['alamat_supp'] ?></td>
                                            <td><?php echo $pur['ATTN'] ?></td>
                                            <td><?php echo $pur['e-mail_supp'] ?></td>
                                            <td><?php echo $pur['no_telp_supp'] ?></td>
                                            <td><?php echo $pur['nama'] ?></td>
                                            <td><?php echo $pur['deskripsi'] ?></td>
                                             <td>
                                                <?php
                                                if ($pur['status_po']=='') {
                                                ?>

                                             <a href="<?php echo base_url() ?>purchase_order/sesuai/<?php echo $pur['id_po']; ?>" class="btn btn-success btn-sm  ">Sesuai</a>
                                             <a href="<?php echo base_url() ?>purchase_order/tidak_sesuai/<?php echo $pur['id_po']; ?>" class="btn btn-danger btn-sm ">Tidak Sesuai</a>

                                                    <?php
                                                }else{
                                                    ?>
                                                    <?php echo $pur['status_po']?>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <?php
                                if ($this->session->userdata('level')=='Admin') {
                                    ?>
                                            <td>
                                             <a href="<?php echo base_url() ?>purchase_order/editdatapurchaseorder/<?php echo $pur['id_po']; ?>" class="btn btn-primary btn-sm  ">Edit</a>
                                             <a href="<?php echo base_url() ?>purchase_order/hapusdatapurchaseorder/<?php echo $pur['id_po']; ?>" class="btn btn-danger btn-sm ">Hapus</a>
                                            </td>
                                            <?php 
                                        }
                                        ?>  
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
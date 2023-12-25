<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel-asset.xls"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <main>
        <div class="container">
            <!-- Your existing HTML content goes here -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Barang</th>
                                            <th>QTY</th>
                                            <th>Satuan</th>
                                            <th>Kategori</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1;
                                        foreach ($data as $b) {
                                            ?>
                                            <tr>  
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $b['kode_barang_non'] ?></td>
                                                <td><?php echo $b['nama_barang_non'] ?></td> 
                                                <td><?php echo $b['jenis_barang_non'] ?></td>
                                                <td><?php echo $b['qty'] ?></td> 
                                                <td><?php echo $b['satuan_non'] ?></td>
                                                <td><?php echo $b['kategori_non'] ?></td>
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
            </div>
        </div>
    </main>
</body>
</html>
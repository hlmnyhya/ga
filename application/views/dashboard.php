
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Beranda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
    <div class="col-xl-3 col-md-6">
        <a href="<?= base_url('barang/masuk')?>">
            <div class="card bg-warning text-white mb-4">
                <h3 class="text-white  pt-1 fw-bold"><?php echo $masuk ?></h3>
                <div class="card-body">Barang Masuk</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- Isi sesuai kebutuhan -->
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <a href="<?= base_url('barang/keluar')?>">
            <div class="card bg-success text-white mb-4">
                <h3 class="text-white pt-1 fw-bold"><?php echo $keluar ?></h3>
                <div class="card-body">Barang Keluar</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- Isi sesuai kebutuhan -->
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <a href="<?= base_url('purchase_order/index')?>">
            <div class="card bg-danger text-white mb-4">
                <h3 class="text-white pt-1 fw-bold"><?php echo $purchasing ?></h3>
                <div class="card-body">Purchasing</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- Isi sesuai kebutuhan -->
                </div>
            </div>
        </a>
    </div>
    <div class="col-xl-3 col-md-6">
        <a href="<?= base_url('kendaraan/index')?>">
            <div class="card bg-primary text-white mb-4">
                <h3 class="text-white pt-1 fw-bold"><?php echo $kendaraan ?></h3>
                <div class="card-body">Data Kendaraan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- Isi sesuai kebutuhan -->
                </div>
            </div>
        </a>
    </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Barang
                                    </div>
                                    <div class="card-body"> <canvas id="myBarang" width="400" height="200"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar me-1"></i>
                        Pengeluaran BBM
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
                        </div>
                        
                    </div>
                </main>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chartData = <?php echo json_encode($bbm); ?>;

    // Extract relevant data from the chartData array
    var labels = chartData.map(item => item.no_lambung);
    var data = chartData.map(item => parseFloat(item.total_harga_bbm)); // Konversi ke Juta
    console.log(data);

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Harga BBM',
                data: data,
                backgroundColor: 'rgb(12, 140, 215)',
                borderColor: 'rgb(12, 140, 215)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function (value, index, values) {
                            return ''+ value + '.000.000';
                        },
                    }
                }
            }
        }
    });
</script>







<script>
    var ctx = document.getElementById('myBarang').getContext('2d');
    var top5Barang = <?php echo json_encode($barang); ?>;

    var tanggal = top5Barang.map(item => item.tanggal);
    var qtyData = top5Barang.map(item => item.qty);
    var namaBarang = top5Barang.map(item => item.nama_barang);

    var areaChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: tanggal,
            datasets: [{
                label: 'Quantity',
                data: qtyData,
                fill: true,
                backgroundColor: 'rgba(255, 0, 0, 0.2)', // Adjusted for transparency
                borderColor: 'rgba(255, 0, 0, 1)',
                borderWidth: 1
            }],
            
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

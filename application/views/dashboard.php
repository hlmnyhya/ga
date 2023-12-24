
    
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Beranda</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Beranda</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Barang Masuk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <span class="text-white small pt-1 fw-bold"><?php echo $keluar ?></span>
                                    <div class="card-body">Barang Keluar</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <span class="text-white small pt-1 fw-bold"><?php echo $purchasing ?></span>
                                    <div class="card-body">Purchasing</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <span class="text-white small pt-1 fw-bold"><?php echo $kendaraan ?></span>
                                    <div class="card-body">Data Kendaraan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
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
    var labels = chartData.map(item => item.model);
    var data = chartData.map(item => item.jumlah_harga_bbm);
    var merkData = chartData.map(item => item.merk);
    var jenisBbmData = chartData.map(item => item.jenis_bbm);

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
                    beginAtZero: true
                }
            },
tooltips: {
    callbacks: {
        label: function(context) {
            var label = context.dataset.label || '';
            if (label) {
                label += ': ';
            }
            label += context.parsed.y + ' IDR';
            
            // Additional data in tooltip
            label += '\nMerk: ' + merkData[context.dataIndex];
            label += '\nJenis BBM: ' + jenisBbmData[context.dataIndex];

            return label;
        }
    }
}

        }
    });
</script>

<script>
        var ctx = document.getElementById('myBarang').getContext('2d');
        var top5Barang = <?php echo json_encode($barang); ?>;

       var labels = top5Barang.map(item => item.nama_barang); // Assuming 'tanggal' is the column representing time
        var qtyData = top5Barang.map(item => item.qty);

        var areaChart = new Chart(ctx, {
            type: 'line', // Use 'line' for an area chart
            data: {
                labels: labels,
                datasets: [{
                    label: 'Quantity',
                    data: qtyData,
                    fill: true, // Set to true for area chart
                    backgroundColor: 'rgba(255, 0, 0, 1)', // Solid red color
                    borderColor: 'rgba(255, 0, 0, 1)',
                    borderWidth: 1
                }]
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